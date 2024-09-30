<textarea id="{{ $id }}" name="{{ $name }}" class="block mt-1 w-full {{ $attributes->get('class') }}" {{ $attributes }}>{{ $slot ?? old($name) }}</textarea>
