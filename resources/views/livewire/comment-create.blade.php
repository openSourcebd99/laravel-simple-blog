<div class="max-w-lg shadow-md">
    {{ $comment }}
    <div class="w-full p-4" x-data="{ open: false }">
        <div class="mb-2">
            <label for="comment" class="text-lg text-gray-600">Add a comment</label>
            <textarea @click="open = true" wire:model="comment"
                class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
                name="comments" placeholder=""></textarea>
        </div>
        <div :class="{ 'flex': open, 'hidden': !open }">
            <button class="px-3 py-2 text-sm text-blue-100 bg-blue-600 rounded mr-4" type="submit"
                wire:click="createComment">
                Comment
            </button>
            <button class="px-3 py-2 text-sm rounded" @click="open = false" type="button">Cancel</button>
        </div>
    </div>
</div>