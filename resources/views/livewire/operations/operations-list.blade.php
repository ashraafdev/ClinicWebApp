<div>
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Patient</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Block Opératoire</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Observation</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date Debut</th>
          <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date Fin</th>
          @unlessrole('Infirmier')
            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
          @endunlessrole
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">

        @foreach ($operations as $operation)
          <tr class="hover:bg-gray-50">
            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
              <div class="text-sm">
                <div class="font-medium text-gray-700">{{ $operation->consultation->patient->prenom }} {{ $operation->consultation->patient->nom }}</div>
                <div class="text-gray-400">{{ $operation->id }}</div>
              </div>
            </th>
            <td class="px-6 py-4">
              <span
                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
              >
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                {{ $operation->blocOperatoire }}
              </span>
            </td>
            <td class="px-6 py-4">
                {{ $operation->observation }}
            </td>
            <td class="px-6 py-4">
              {{ $operation->dateDebut }}
            </td>
            <td class="px-6 py-4">
                {{ $operation->dateFin }}
              </td>
            @if ((auth()->user()->getRoleNames()[0] == 'Assistant') || (auth()->user()->getRoleNames()[0] == 'Infirmier') || (auth()->user()->getRoleNames()[0] == 'Medecin' && $operation->consultation->patient->medecin == auth()->user()->id))
              <td class="px-6 py-4">
                <div class="flex justify-end gap-4">
                  @unlessrole('Infirmier')
                    <button onclick='Livewire.emit("openModal", "operations.edit-operation", {{ json_encode(["operation" => $operation->id]) }})'>
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
                    @if ($operation->paymentOrder == null) 
                      <button
                        onclick='Livewire.emit("openModal", "operations.proceed-paiement", {{ json_encode(["operationId" => $operation->id, "patient" => $operation->consultation->patient->id]) }})'>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAa0lEQVR4nO2UQQrAMAgE510huTf9/wuah1gKOSol1GKhLuwpqwOKgdSCdmAA8tAD6BrAo7lMHxpAnB0LKNiqRq6uAK6wpWbk2qdGJLkDokck0YCi1C/dwZ2rUv+DOxhvf9d9Png03zRACk0nSP8r0/uyngYAAAAASUVORK5CYII=">
                      </button>
                    @endif
                  @endunlessrole
                  @hasrole('Infirmier')
                    <button
                      onclick='Livewire.emit("openModal", "operations.mesure-upload", {{ json_encode(["operation" => $operation->id]) }})'>
                      <img width="40" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAVElEQVR4nO3RwQ2AIBQFQfpvGi82YBBdzUzy7zx2DADgEfO8z5uGxChSo0iNIjWK1ChSo8jOX33rbvObIStSj1lhSI0iNYrUKFKjSI0iNYoAAOOaA3YIe4Wc1+KdAAAAAElFTkSuQmCC">
                    </button>
                    <button
                      onclick='Livewire.emit("openModal", "operations.mesures-list", {{ json_encode(["operation" => $operation->id]) }})'>
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABkklEQVR4nO2WvUoDQRSFPwsjoomk8wHEUpNgL9aKnVjYii/hT2FEIwgS8hBKgp1gY6ddYpGHWPNjKRKrRAZuYBj3zu5iRIs9cJs7557D3Duzs5AixT/AGlAGHoEOMJDoSO4UKE3ScBt4AUYxowls/cRwGXhIYOjGPbCU1HQX+AgR6wGHQAGYkygCR7Lm8t+BnTiGU8A5MAwRqQNZT61Za4TUGa0z0VZNa0rb6r5CRyPMfARUNY0rpaAXsVMXOaCvaF265APPITEztZERgVcgACqSs3Hs0dsfk1aBTw/RrNuohHBMzkbRozcAVgypFXEt3DYHIRyTs5GN0GwZUvsXjHMRmm1D2lCuzzgKMVp9kaDVQ2B9TKx6iObjYCMj5oHncJ149K5dsecJXacF4E3RegKm3YK8Z96NBB+QO89c81rhorwumnkuYqeaaVO0vZgFbhWBvnwczLs7L1GSmWrtvRHNWDAt21OuTtwIRCPOiL4hKy+LthutK+WEB1LFDLApr5c5/V3r16cruZpwDDdFCv4MXw/YJO5+W1zLAAAAAElFTkSuQmCC">
                    </button>
                  @endhasrole
                </div>
              </td>
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="mx-2 my-2">
      {{ $operations->links() }}
    </div>
    
  </div>