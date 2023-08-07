<?php

namespace App\Enums;

enum PostType: int
{
    case Article = 0;
    case Episode = 1;
    case Interview = 2;
    case News = 3;
    case Announcement = 4;
}