<div>
    {{-- Modal post Features --}}
<div wire.ignore.self class="modal fade" id="click" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modall">
        <div class="modal-header text-center">
            <h5 class="modal-title title1 text-white" id="exampleModalLabel">Create post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <select name="title" class="form-select" wire:model.defer="title">
            <option hidden="true">Reason of posting?</option>
            <option selected disabled>Reason of posting?</option>
            <option value="">None</option>
            <option value="Feeling Sick">Feeling Sick</option>
            <option value="Feeling Sad">Feeling Sad</option>
            <option value="Feeling Emotional">Feeling Emotional</option>
            <option value="Feeling Broken">Feeling Broken</option>
            <option value="Feeling Happy">Feeling Happy</option>
            <option value="Feeling Cute">Feeling Cute</option>
            <option value="Feeling Loved">Feeling Loved</option>
            <option value="Feeling Thankful">Feeling Thankful</option>
            <option value="Feeling Angry">Feeling Angry</option>
            <option value="Feeling Crazy">Feeling Crazy</option>
            <option value="Feeling Hopeful">Feeling Hopeful</option>
            <option value="Feeling Proud">Feeling Proud</option>
            <option value="Feeling Fresh">Feeling Fresh</option>
            <option value="Feeling Blessed">Feeling Blessed</option>
            <option value="Feeling Bad">Feeling Bad</option>
            <option value="Feeling Rich">Feeling Rich</option>
            <option value="Feeling Betrayed">Feeling Betrayed</option>
            <option value="Feeling Sleepy">Feeling Sleepy</option>
            <option value="Feeling Nervous">Feeling Nervous</option>
            <option value="Feeling Uncomfortable">Feeling Uncomfortable</option>
            <option value="Feeling Cold">Feeling Cold</option>
            <option value="Feeling Lol">Feeling Lol</option>
            <option value="Feeling In love">Feeling In love</option>
            <option value="Feeling Incomplete">Feeling Incomplete</option>
            <option value="Feeling Cool">Feeling Cool</option>
            <option value="Feeling Wow">Feeling Wow</option>
            <option value="Feeling Cry">Feeling Cry</option>
            <option value="Feeling Explode">Feeling Explode</option>
            <option value="Feeling Disguise">Feeling Disguise</option>
        </select>
        <div class="modal-body">
            <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Express your feelings" wire:model.defer="content"></textarea>
        </div>
        <div class="modal-footer">
                <button type="button" id="submit-button" class="btn btn-secondary form-control" wire:click="addPost()">Post</button>
        </div>
      </div>
    </div>
</div>
    {{-- delete post --}}
@foreach ($posts as $post)
<div wire.ignore.self class="modal fade" id="click-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modall">
        <div class="modal-header text-center">
            <h5 class="modal-title title3 text-white" id="exampleModalLabel">Are you sure you want to delete this post?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-center text-white">This deletion can not be undone</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary form-control" wire:click="deletePost({{ $post->id }})">Delete Post</button>
        </div>
      </div>
    </div>
</div>

@endforeach

{{-- Modal edit feature --}}
<div wire.ignore.self class="modal fade" id="click-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="modall">
        <div class="modal-header text-center">
            <h5 class="modal-title title2 text-white" id="exampleModalLabel">Edit post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <select name="title" class="form-select" wire:model.defer="title">
            <option hidden="true">Reason of posting?</option>
            <option selected disabled>Reason of posting?</option>
            <option value="">None</option>
            <option value="Feeling Sick">Feeling Sick</option>
            <option value="Feeling Sad">Feeling Sad</option>
            <option value="Feeling Emotional">Feeling Emotional</option>
            <option value="Feeling Broken">Feeling Broken</option>
            <option value="Feeling Happy">Feeling Happy</option>
            <option value="Feeling Cute">Feeling Cute</option>
            <option value="Feeling Loved">Feeling Loved</option>
            <option value="Feeling Thankful">Feeling Thankful</option>
            <option value="Feeling Angry">Feeling Angry</option>
            <option value="Feeling Crazy">Feeling Crazy</option>
            <option value="Feeling Hopeful">Feeling Hopeful</option>
            <option value="Feeling Proud">Feeling Proud</option>
            <option value="Feeling Fresh">Feeling Fresh</option>
            <option value="Feeling Blessed">Feeling Blessed</option>
            <option value="Feeling Bad">Feeling Bad</option>
            <option value="Feeling Rich">Feeling Rich</option>
            <option value="Feeling Betrayed">Feeling Betrayed</option>
            <option value="Feeling Sleepy">Feeling Sleepy</option>
            <option value="Feeling Nervous">Feeling Nervous</option>
            <option value="Feeling Uncomfortable">Feeling Uncomfortable</option>
            <option value="Feeling Cold">Feeling Cold</option>
            <option value="Feeling Lol">Feeling Lol</option>
            <option value="Feeling In love">Feeling In love</option>
            <option value="Feeling Incomplete">Feeling Incomplete</option>
            <option value="Feeling Cool">Feeling Cool</option>
            <option value="Feeling Wow">Feeling Wow</option>
            <option value="Feeling Cry">Feeling Cry</option>
            <option value="Feeling Explode">Feeling Explode</option>
            <option value="Feeling Disguise">Feeling Disguise</option>
        </select>
        <div class="modal-body">
            <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Express your feelings" wire:model.defer="content"></textarea>
        </div>
        <div class="modal-footer">
                <button type="button" id="submit-button" class="btn btn-secondary form-control" wire:click="updatePost()">Update Post</button>
        </div>
      </div>
    </div>
</div>
</div>
