@props(['name','type','label'])
<label class="block  font-medium leading-6  text-gray-900" >{{$label}}</label>
<input  {{ $attributes }}  required  type="{{$type}}" name="{{$name}}" id="{{$name}}" class="block ps-3 w-11/12   rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
@error($name)
    <div class="text-red-800 text-sm">
        {{ $message }} </div>
@enderror
