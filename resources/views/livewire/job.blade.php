<div>
    <div class="contour_job">
        <div class="">
            <h2 class=""> 
                {{ $job->titre }}
            </h2>    
                <div wire:click="addLike" class="h-5 w-5 like"> 
                    @if ($job->isLiked())
                        <i class="fa fa-heart-o text-danger"></i>
                    @else
                        <i class="fa fa-heart-o"></i>
                    @endif
                    
                </div>
        </div>
        <div class="descpt_job">
            {{ $job->descrpition }}
        </div>
        <div class="prix">
            {{ $job->prix }}
        </div>
    </div>
</div>
