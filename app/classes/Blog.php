<?php


namespace App\classes;


class Blog
{
    public $blogs;
    public function __construct()
    {
        $this->blogs = [
            0 => [
                "title" => "Title of our First Blog",
                "sd"    => "Short Description of this Blog",
                "ld"    => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu odio nunc. Suspendisse nec massa a quam mattis semper. Nunc nec viverra magna. Curabitur vitae bibendum purus. Nulla vehicula mattis elit, finibus malesuada velit congue eu. Donec et tortor a velit congue pharetra. Phasellus elementum tortor dui, ut condimentum magna vehicula quis. Nulla ut nulla et urna faucibus efficitur. Pellentesque eget tempor velit, vitae porttitor sem. Integer eros metus, consectetur sit amet leo rutrum, rutrum dictum nibh.",
                "img"   => "assets/images/01.jpg"
            ],
            1 => [
                "title" => "Title of our Second Blog",
                "sd"    => "Short Description of this Blog",
                "ld"    => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu odio nunc. Suspendisse nec massa a quam mattis semper. Nunc nec viverra magna. Curabitur vitae bibendum purus. Nulla vehicula mattis elit, finibus malesuada velit congue eu. Donec et tortor a velit congue pharetra. Phasellus elementum tortor dui, ut condimentum magna vehicula quis. Nulla ut nulla et urna faucibus efficitur. Pellentesque eget tempor velit, vitae porttitor sem. Integer eros metus, consectetur sit amet leo rutrum, rutrum dictum nibh.",
                "img"   => "assets/images/02.jpg"
            ],
            2 => [
                "title" => "Title of our Three Blog",
                "sd"    => "Short Description of this Blog",
                "ld"    => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu odio nunc. Suspendisse nec massa a quam mattis semper. Nunc nec viverra magna. Curabitur vitae bibendum purus. Nulla vehicula mattis elit, finibus malesuada velit congue eu. Donec et tortor a velit congue pharetra. Phasellus elementum tortor dui, ut condimentum magna vehicula quis. Nulla ut nulla et urna faucibus efficitur. Pellentesque eget tempor velit, vitae porttitor sem. Integer eros metus, consectetur sit amet leo rutrum, rutrum dictum nibh.",
                "img"   => "assets/images/03.jpg"
            ],
        ];
    }
}