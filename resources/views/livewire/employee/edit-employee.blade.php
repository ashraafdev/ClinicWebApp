
<form class="w-full max-w bg-white p-8 rounded-md" wire:submit.prevent="store" >
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Name</label>
            <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text"  placeholder="John Doe"
                wire:model='user.name'
                />
                @error('user.name')
                    <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm  font-bold mb-2">CIN</label>
            <input  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            wire:model='user.cin'
                
            type="text"  placeholder="xx123456"/>
            @error('user.cin')
            <p class="mt-2 text-sm text-red-600 "><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm  font-bold mb-2" for="email">Email</label>
            <input  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
            wire:model='user.email'
                
            type="email"  placeholder="john@example.com"/>
            @error('user.email')
            <p class="mt-2 text-sm text-red-600 "><span class="font-medium">Oops!</span> {{$message}}</p>

            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
            <input  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                wire:model='password' type="password"  placeholder="********"
            />
            @error('password')
                <p class="mt-2 text-sm text-red-600 "><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Phone</label>
            <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text"  placeholder="0601020304"
                wire:model='user.phone'
            />
            @error('user.phone')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Address</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="text" placeholder="Bvd Med 5, Casablanca"
                wire:model='user.address'
            />
            @error('user.address')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm  font-bold mb-2">Gender</label>
            <select name="profileType" wire:model='user.gender' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option value="male" selected>Male</option>
                <option value="female">Femal</option>
            </select>
            @error('user.gender')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Born Date</label>
            <input   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="date"  placeholder="YYYY-MM-DD"
                wire:model='user.bornDate'
                />
                @error('user.bornDate')
                    <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
                @enderror
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" >Recruting Date</label>
            <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                type="date"  placeholder="YYYY-MM-DD"
                wire:model='user.recrutingDate'
                />
                @error('user.recrutingDate')
                    <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm  font-bold mb-2" for="password">Employee Type</label>
            <select name="profileType" wire:model='user.typeEmploi'  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                @foreach ($roles as $role)
                    <option value="{{ $role }}">{{ $role }}</option>
                @endforeach
            </select>
            @error('user.typeEmploi')
                <p class="mt-2 text-sm text-red-600"><span class="font-medium">Oops!</span> {{$message}}</p>
            @enderror
        </div>
    </div>
    <button
        class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
        type="submit">Update Employee
    </button>
 
  </form> 