<?php

namespace App\Livewire;

use Livewire\Component;

#[Layout('layouts.app')] 
class Home extends Component
{
    public $title = 'Home';
    public $services = [
        [
            "_id" => 1,
            "image" => "/images/services/1.jpg",
            "title" => "Communication",
            "description" => "Pretium lectus quam id leo in vitae turpis. Mattis pellentesque id nibh tortor id."
            // ... will be added more properties
        ],
        [
            "_id" => 2,
            "image" => "/images/services/2.jpg",
            "title" => "Inspired Design",
            "description" => "Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Risus feugiat."
            // ... will be added more properties
        ],
        [
            "_id" => 3,
            "image" => "/images/services/3.jpg",
            "title" => "Happy Customers",
            "description" => "Nisl purus in mollis nunc sed id semper. Rhoncus aenean vel elit scelerisque mauris."
            // ... will be added more properties
        ],
    ];

    public $works = [
        [
            "_id" => 1,
            "image" => "/images/portfolio/1.jpg",
            "title" => "Website Design",
            // ... will be added more properties
        ],
        [
            "_id" => 2,
            "image" => "/images/portfolio/2.jpg",
            "title" => "Mobile Application",
            // ... will be added more properties
        ],
        [
            "_id" => 3,
            "image" => "/images/portfolio/3.jpg",
            "title" => "Animations",
            // ... will be added more properties
        ],
        [
            "_id" => 4,
            "image" => "/images/portfolio/4.jpg",
            "title" => "Digital Product",
            // ... will be added more properties
        ],
        [
            "_id" => 5,
            "image" => "/images/portfolio/5.jpg",
            "title" => "Mobile Application",
            // ... will be added more properties
        ],
        [
            "_id" => 6,
            "image" => "/images/portfolio/6.jpg",
            "title" => "Responsive Design",
            // ... will be added more properties
        ],
        [
            "_id" => 7,
            "image" => "/images/portfolio/7.jpg",
            "title" => "Graphic Design",
            // ... will be added more properties
        ],
        [
            "_id" => 8,
            "image" => "/images/portfolio/8.jpg",
            "title" => "Branding",
            // ... will be added more properties
        ],
        [
            "_id" => 9,
            "image" => "/images/portfolio/9.jpg",
            "title" => "Marketing",
            // ... will be added more properties
        ]
    ];

    public $blogs = [
        [
            "_id" => 1,
            "image" => "/images/blog/1.jpg",
            "title" => "Website Design",
            "description" => "Sample text. Click to select the text box. Click again or double click to start editing the text. Nec ultrices dui sapien eget mi proin sed libero. Aliquam eleifend mi in nulla posuere. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare."
            // ... will be added more properties
        ],
        [
            "_id" => 2,
            "image" => "/images/blog/2.jpg",
            "title" => "Web Application",
            "description" => "Aliquam eleifend mi in nulla posuere. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis."
            // ... will be added more properties
        ]
    ];

    public $members = [
        [
            "_id" => 1,
            "image" => "/images/team/1.jpeg",
            "role" => "CEO",
            "name" => "Mary Brown",
            "title" => "Website Design",
            "description" => "Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum",
            "contact" => [
                "linked_in" => "",
                "telegram" => "",
                "gmail" => "",
                "discord" => ""
            ]
            // ... will be added more properties
        ],
        [
            "_id" => 2,
            "image" => "/images/team/2.jpeg",
            "role" => "Full stack developer",
            "name" => "Ann Richmond",
            "title" => "Web Application",
            "description" => "Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum",
            "contact" => [
                "linked_in" => "",
                "telegram" => "",
                "gmail" => "",
                "discord" => ""
            ]
            // ... will be added more properties
        ],
        [
            "_id" => 3,
            "image" => "/images/team/3.jpeg",
            "role" => "Designer",
            "name" => "Nina Greenfield",
            "title" => "Web Application",
            "description" => "Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum",
            "contact" => [
                "linked_in" => "",
                "telegram" => "",
                "gmail" => "",
                "discord" => ""
            ]
            // ... will be added more properties
        ]
    ];
    
    public function render()
    {
        return view('livewire.home');
    }
}
