<div class="w-full max-w bg-white p-8 rounded-md">
    <input id="card-holder-name" type="text">
 
    <!-- Stripe Elements Placeholder -->
    <div id="card-element"></div>
    
    <button id="card-button">
        Process Payment
    </button>
    <script>
        const stripe = Stripe('pk_test_51Nm4L1HWvd91xczrDockmEkmrhWKpHiBDZvSQ2toVnaWe76o8LFwMQpGRibNBc5gWM7jjBokjsKPmuoubWaMJu4Q00RvVAkKMF');
        
        const elements = stripe.elements();
        const cardElement = elements.create('card');
            
        cardElement.mount('#card-element'); 

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        
        cardButton.addEventListener('click', async (e) => {
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );
        
            if (error) {
                window.Livewire.emit('openModal', 'misc.error-modal');
            } else 
                window.Livewire.emit('processPayementSucess', paymentMethod);
        });
    </script>
</div>
