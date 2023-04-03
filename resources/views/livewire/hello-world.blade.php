<div>
  @foreach ($contacts as $contact)
    @livewire('say-hi', ['contact' => $contact], key($contact->name))
  @endforeach
</div>
