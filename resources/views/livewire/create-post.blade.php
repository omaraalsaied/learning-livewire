<div>
    <h2>New Post:</h2>



    <form wire:submit='save'>
        <label>
            <span>Title</span>
            <input type="text" wire:model='title'>
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <label>
            <span>content</span>
            <textarea wire:model='content'></textarea>
            <small>words count:
                <span x-text="$wire.content.split(' ').length - 1"></span>
            </small>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
