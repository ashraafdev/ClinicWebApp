<div class="w-full max-w bg-white p-2 rounded-md">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mesureImages as $image)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $image->created_at }}
                        </th>
                        <td class="px-6 py-4 flex space-x-4">
                            <button onclick="showImage('{{  base64_encode(Storage::disk('local')->get('consultations/mesures/' . $image->imageName)) }}')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</button>
                            <button onclick='Livewire.emit("openModal", "consultation.delete-mesure", {{ json_encode(["mesure" => $image->id]) }})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-2">
            {{ $mesureImages->links() }}
        </div>
    </div>
</div>
