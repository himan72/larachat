<div>
    <div class="form-group mt-3 mb-0">
        <form wire:submit.prevent="create">
            <textarea
                wire:model="body"
                class="form-control"
                rows="3"
                placeholder="Type your message here..."></textarea>

            @error('body') <span class="error text-danger my-4">{{ $message }}</span> @enderror

            <button class="btn btn-secondary btn-block my-4">Send</button>

        </form>
    </div>
</div>
