function SwapDiv(div)
{
    document.getElementsByClassName('home')[0].style.display="none";
    document.getElementsByClassName('presentation')[0].style.display="none";
    document.getElementsByClassName('veille')[0].style.display="none";
    document.getElementsByClassName('project')[0].style.display="none";
    document.getElementsByClassName('backup')[0].style.display="none";
    document.getElementsByClassName(div)[0].style.display="block";
}