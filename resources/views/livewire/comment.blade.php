

<form wire:submit="save">
    
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        
        <input  type="text"id="name" class="form-control" wire:model="name" placeholder="Inserisci il tuo nome">
        
        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="body" class="form-label">Messaggio</label>
        
        <textarea id="body" rows="5"  class="form-control" wire:model="body" placeholder="Scrivi il tuo messaggio..." ></textarea>
        
        @error('body')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-dark">
        Invia
    </button>
    
</form>