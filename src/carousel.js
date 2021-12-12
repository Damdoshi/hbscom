var auto_carousel = {};
var carousel_length = {};
var carousel_status = {};

function auto_carousel()
{
    for (var k in auto_carousel)
    {
	if (auto_carousel.hasOwnProperty(k))
	{
	    carousel(k, +1);
	}
    }
    setTimeout(auto_carousel, 3000);
}

function carousel(id, dir)
{
    if (auto_carousel[id] === true)
	auto_carousel[id] = false;
    var curstatus = carousel_status[id];

    if (carousel_status[id] + dir < 0)
	carousel_status[id] = carousel_length[id] - 1;
    else if (carousel_status[id] + dir >= carousel_length[id])
	carousel_status[id] = 0;
    else
	carousel_status[id] += dir;

    document.getElementById(id + "_Slide" + carousel_status[id]).style.zIndex = 1;
    document.getElementById(id + "_Slide" + curstatus).style.zIndex = 0;

}
