<x-app-layout>
    <form action="/{{$user->username}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-gray-900">{{__("username")}}</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">/</span>
                                <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" value="{{$user->username}}">

                            </div>
                            @error('username')
                            <div class="mt-2 text-sm text-red-600">{{$message}}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="col-span-full">
                        <label for="bio" class="block text-sm/6 font-medium text-gray-900">{{__("bio")}}</label>
                        <div class="mt-2">
                            <textarea id="bio" name="bio" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="photo" class="block text-sm/6 font-medium text-gray-900">{{__("photo")}}</label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <img src="{{ asset('storage/' . $user->image )}}" alt="" class="h-12 w-12 rounded-full mr-5 border border-gray-300">
                            <input  class="w-full border border-gray-200 bg-gray-50 block focus:outline-none rounded-xl" name="image" id="file_input" type="file">
                        </div>

                        @error('image')
                        <div class="mt-2 text-sm text-red-600">{{$message}}</div>
                        @enderror
                    </div>
                    <div  class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="private_account" name="private_account" type="checkbox" class="focus:ring-neutral-500 h-4 w-4 text-neutral-600 border-gray-300 rounded"
                               {{$user->private_account ? 'checked' : ''}}>
                        </div>

                        <div class="ml-3 text-sm">
                            <label for="private_account" class="font-medium text-gray-900">{{__("Private Account")}}</label>

                        </div>


                    </div>

                </div>
                <div class="mt-6 flex items-center justify-end ">
                    <button type="submit" class=" rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 ">Change</button>
                </div>

            </div>


            </div>

            <div class="border-b border-gray-900/10 pb-12 mt-5">
                <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="given-name" value="{{$user->name}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    @error('name')
                    <div class="mt-2 text-sm text-red-600">{{$message}}</div>
                    @enderror


                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" value="{{$user->email}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    @error('email')
                    <div class="mt-2 text-sm text-red-600">{{$message}}</div>
                    @enderror

                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    @error('password')
                    <div class="mt-2 text-sm text-red-600">{{$message}}</div>
                    @enderror

                    <div class="sm:col-span-4">
                        <label for="password_confiramtion" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
                        <div class="mt-2">
                            <input id="password_confirmation" name="password_confirmation" type="password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    @error('image')
                    <div class="mt-2 text-sm text-red-600">{{$message}}</div>
                    @enderror


                </div>
            </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-app-layout>
