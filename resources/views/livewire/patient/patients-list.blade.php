<div>
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">CIN</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Phone</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
          @unlessrole('Infirmier')
            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
          @endunlessrole
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">

        @foreach ($patients as $patient)
          <tr class="hover:bg-gray-50">
            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
              <div class="text-sm">
                <div class="font-medium text-gray-700">{{ $patient->nom }} {{ $patient->prenom }}</div>
                <div class="text-gray-400">{{ $patient->id }}</div>
              </div>
            </th>
            <td class="px-6 py-4">
              <span
                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
              >
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                {{ $patient->cin }}
              </span>
            </td>
            <td class="px-6 py-4">{{ $patient->tel }}</td>
            <td class="px-6 py-4">
                {{ $patient->adresse }}
            </td>
            @if ((auth()->user()->getRoleNames()[0] == 'Assistant') || (auth()->user()->getRoleNames()[0] == 'Medecin' && $patient->medecin == auth()->user()->id))
              <td class="px-6 py-4">
                <div class="flex justify-end gap-4">
                  <button onclick='Livewire.emit("openModal", "patient.edit-patient", {{ json_encode(["patient" => $patient->id]) }})'>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6"
                      x-tooltip="tooltip"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                      />
                    </svg>
                  </button>
                  <button onclick='Livewire.emit("openModal", "patient.payements-waitinglist", {{ json_encode(["patient" => $patient->id]) }})'>
                    <img width="40" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACQUlEQVR4nO2YzUsVURiHn0TSTeCiRK2FKxd9LNrZQkRcmOQms0UraSMt2hRBSIs2XXQRIWp/QJ/gyj9A0kW6sRZ9WtAmsqBcmKZFo3iPHDjCMMy9c87MOTN3YB54Ybic857f7857vgYKCgoKfAwAy4AHCEfhASUciRcpxR8XBl6lJN4D7rkwEFY2P8gRIiTGyBEi8M+PA4cN+l8GFoANFfJ5iIwMmFAPPKtS809Um5o1MKExcR9QowbOAGUNA3vAKWrQwEOD5XPKtuAm4EqEgQvAd2AV6A/J8cnAwEcbohuBYWAO2AmIDTOw6vvtW0i+bQMDsm0izgFfQhLnwkAv8K9C4moG+pUJKf58ViXUAqxVSVzNQBTTBgYm4xp4GpE4iYHTBsvoyTjiuzUGSGIAtUlFGbhPDOT2/V4jeVID9eq4UCn/o7hHiRuatRk0UA4ReA34APwGFoGekPEuAfPqICfbvQAGiUkrsBnDwGugM1CC7yrUdBcOiZq4B7Hu6zMC1Knn48DziPnz0pV4nYkr4y1wLNBXnv9vA1sa/eUbljQYLKWRl3rdiStjNNC3D/hsIOSN720JW5f6mwZJpNF2tZbPxhBxVY05bOtS32YwcZOGvMRY53FK4u/iiL+Ohcul8zoOEQ5j11fzuTPwH7joWjyOxG+43nH92Bb/EzhLigiL8RXoSFM8FsWvACfIAGEh5Cf2o1mIx4J4eZY/QoaIBDGjTpWZ4sUQLr/V3AIOUQOUNE38ApaAO0Bz1qILCgrIN/uyivrvICSovgAAAABJRU5ErkJggg==">
                  </button>
                </div>
              </td>
            @endif
          </tr>

        @endforeach
      </tbody>
    </table>
    <div class="mx-2 my-2">
      {{ $patients->links() }}
    </div>
  </div>