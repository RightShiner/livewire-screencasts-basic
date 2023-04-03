<div>
  <input wire:model="name" type="text">
  <input wire:model="lazy" type="checkbox">
  <select wire:model="greeting" multiple>
    <option>Hello</option>
    <option>Goodbye</option>
    <option>Hi</option>
  </select>
  {{ implode(', ', $greeting) }} {{ $name }}
  @if ($lazy)
    !
  @endif
</div>
