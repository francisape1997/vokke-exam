@vite(['resources/css/app.css'])

<div class="bg-white p-6 rounded-lg">
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="name">Name</label>
        <input class="border border-gray-400 p-2 w-full" type="text" id="name" name="name">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="nickname">Nickname</label>
        <input class="border border-gray-400 p-2 w-full" type="text" id="nickname" name="nickname">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="weight">Weight</label>
        <input class="border border-gray-400 p-2 w-full" type="number" id="weight" name="weight">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="height">Height</label>
        <input class="border border-gray-400 p-2 w-full" type="number" id="height" name="height">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="gender">Gender</label>
        <select class="border border-gray-400 p-2 w-full" id="gender" name="gender">
            <option value="MALE">Male</option>
            <option value="FEMALE">Female</option>
            <option value="OTHER">Other</option>
        </select>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="friendliness">Friendliness</label>
        <select class="border border-gray-400 p-2 w-full" id="friendliness" name="friendliness">
            <option value="FRIENDLY">Friendly</option>
            <option value="NOT_FRIENDLY">Not Friendly</option>
        </select>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="color">Color</label>
        <input class="border border-gray-400 p-2 w-full" type="text" id="color" name="color">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 font-medium mb-2" for="date_of_birth">Date of Birth</label>
        <input class="border border-gray-400 p-2 w-full" type="date" id="date_of_birth" name="date_of_birth">
    </div>
    <div class="text-right mt-6">
        <button
            class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 mr-20"
            onClick="cancel()"
        >
            Cancel
        </button>
        <button
            class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"
            onClick="save()"    
        >
            Save
        </button>
    </div>
</div>
