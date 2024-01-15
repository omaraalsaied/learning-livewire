    <tr @class(['archieved' => $post->is_archieved])>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>
            <button type='button' wire:click='$parent.delete({{ $post->id }})'
                wire:confirm='Sure you wanna delete this?'>Delete</button>
        </td>
        @unless($post->is_archieved)
        <td>
            <button
             type='button'
             wire:click='archieve({{ $post->id }})'
             wire:confirm='Sure you wanna archieve this?'
            >
                Archieve
            </button>
        </td>
        @endunless
    </tr>
