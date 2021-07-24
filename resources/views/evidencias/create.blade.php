<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear evidencias') }}
        </h2>
    </x-slot>
    <div class="py-6 container mx-auto" >
        <div class=" space-y-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12">
                    <h2 class="text-2xl font-bold">Simple</h2>
                    <div class="mt-8 max-w-md">
                      <div class="grid grid-cols-1 gap-6">
                        <label class="block">
                          <span class="text-gray-700">Full name</span>
                          <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="">
                        </label>
                        <label class="block">
                          <span class="text-gray-700">Email address</span>
                          <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
                        </label>
                        <label class="block">
                          <span class="text-gray-700">When is your event?</span>
                          <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </label>
                        <label class="block">
                          <span class="text-gray-700">What type of event is it?</span>
                          <select class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Corporate event</option>
                            <option>Wedding</option>
                            <option>Birthday</option>
                            <option>Other</option>
                          </select>
                        </label>
                        <label class="block">
                          <span class="text-gray-700">Additional details</span>
                          <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3"></textarea>
                        </label>
                        <div class="block">
                          <div class="mt-2">
                            <div>
                              <label class="inline-flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" checked="">
                                <span class="ml-2">Email me news and special offers</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>
