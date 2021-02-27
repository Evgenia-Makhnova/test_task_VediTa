function Select (e)
{
    var evt = window.event || e,
        obj = evt.srcElement || evt.target;
    if (obj.tagName == 'TABLE') return;
    while (obj.tagName != 'TR') obj = obj.parentNode;
    obj.className = obj.className ? '' : 'act';
}

onload = function ()
{
    var trg = document.getElementById ('select');
    if (document.addEventListener) trg.addEventListener ('click', Select);
    else if (document.attachEvent) trg.attachEvent ('onclick', Select);
    else trg.onclick = myFunc;
}