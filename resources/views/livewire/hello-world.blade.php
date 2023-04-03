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
  <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
    <button>Reset Name</button>
  </form>
  {{-- <button wire:click="resetName($event.target.innerText)">Reset Name</button> --}}
</div>
