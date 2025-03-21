<!-- Modal -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-gray-900 bg-opacity-50">
    <div class="bg-white rounded-lg shadow-xl max-w-lg w-full">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b border-gray-200">
        <h2 class="text-lg font-semibold text-gray-900">Modal Title</h2>
        <button class="text-gray-400 hover:text-gray-600" onclick="closeModal()">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      
      <!-- Modal body -->
      <div class="p-4">
        <p class="text-gray-700">This is the modal content. Add your details here.</p>
      </div>
      
      <!-- Modal footer -->
      <div class="flex justify-end p-4 border-t border-gray-200">
        <button class="px-4 py-2 text-gray-600 hover:text-gray-800" onclick="closeModal()">Cancel</button>
        <button class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Confirm</button>
      </div>
    </div>
  </div>

  