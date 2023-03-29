const like=document.querySelector(".main__like");
const dislike=document.querySelector(".main__dislike");
const likesCounter=document.querySelector(".main__amount");

let liked = null;

like.addEventListener("click",()=>
{
    like.classList.toggle("main__liked");
    dislike.classList.remove("main__disliked");
    
    if(liked == null)
    {
        likesCounter.textContent++;
        liked = true;
    }
    else if(liked == false)
    {
        likesCounter.textContent = Number(likesCounter.textContent) + 2;
        liked = true;
    }
    else if(liked == true)
    {
        likesCounter.textContent--;
        liked = null;
    }
});

dislike.addEventListener("click",()=>
{
    dislike.classList.toggle("main__disliked");
    like.classList.remove("main__liked");

    if(liked == null)
    {
        likesCounter.textContent--;
        liked = false;
    }
    else if(liked == true)
    {
        likesCounter.textContent = Number(likesCounter.textContent) - 2;
        liked = false;
    }
    else if(liked == false)
    {
        likesCounter.textContent++;
        liked = null;
    }
});