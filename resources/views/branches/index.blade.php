<x-layout>
    @foreach($branches as $branch)
    <form method="POST" id="update-form" action="{{ route('branches.updateBranch') }}">
        @csrf
        @method('PUT')
        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="branch_no" class="block text-sm font-medium leading-6 text-gray-900">Brnach</label>
                        <div class="mt-2">
                            <input type="number" value="{{ $branch->branch_no }}" name="branch_no" id="branch_no" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="custom_no" class="block text-sm font-medium leading-6 text-gray-900">Cutom No.</label>
                        <div class="mt-2">
                            <input type="number" value="{{ $branch->custom_no }}" name="custom_no" id="custom_no" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="name_ar" class="block text-sm font-medium leading-6 text-gray-900">Arabic Name</label>
                        <div class="mt-2">
                            <input id="name_ar" value="{{ $branch->name_ar }}" name="name_ar" type="name_ar" autocomplete="name_ar" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desc_ar" class="block text-sm font-medium leading-6 text-gray-900">Arabic Description</label>
                        <div class="mt-2">
                            <input id="desc_ar" value="{{ $branch->desc_ar }}" name="desc_ar" type="desc_ar" autocomplete="desc_ar" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="name_en" class="block text-sm font-medium leading-6 text-gray-900">English Name</label>
                        <div class="mt-2">
                            <input id="name_en" value="{{ $branch->name_en }}" name="name_en" type="name_en" autocomplete="name_en" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desc_en" class="block text-sm font-medium leading-6 text-gray-900">English Description</label>
                        <div class="mt-2">
                            <input id="desc_en" value="{{ $branch->desc_en }}" name="desc_en" type="desc_en" autocomplete="desc_en" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desc_en" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                        <div class="mt-2">
                            <textarea name="notes" id="notes" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $branch->notes }}</textarea>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desc_en" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                        <div class="mt-2">
                            <textarea name="address" id="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $branch->notes }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div> -->
    </form>
    @endforeach
    <br>
    {{$branches->links()}}
</x-layout>