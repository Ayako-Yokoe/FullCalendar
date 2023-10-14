<?php

namespace App\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public $today;
    public $selectedDay;
    public $selectedMonth;
    public $events;
    public $sortedAnimalShows;


    public function mount()
    {
        $this->today = now();

        $this->getEvent();

        $this->sortAnimalShows();
    }

    public function render()
    {
        return view('livewire.calendar');
    }

    public function getEvent()
    {
        $events = [
            [
                'id' => 101,
                'start' => '2023-09-20',
                'display' => 'background'
            ],
            [
                'id' => 102,
                'start' => '2023-10-10',
                'display' => 'background'
            ],
            [
                'id' => 103,
                'start' => '2023-10-16',
                'display' => 'background'
            ],
            [
                'id' => 104,
                'start' => '2023-10-29',
                'display' => 'background'
            ],
            [
                'id' => 105,
                'start' => '2023-10-31',
                'display' => 'background'
            ],
            [
                'id' => 106,
                'start' => '2023-11-03',
                'display' => 'background'
            ],
        ];

        $this->events = $events;
    }

    public function sortAnimalShows()
    {
        $animalShows = [
            '2023-10-16' => [
                        [
                            'name' => 'Koala',
                            'image' => '🐨',
                            'from' => '10:00',
                            'to' => '10:30'
                        ],
                        [
                            'name' => 'Tiger',
                            'image' => '🐯',
                            'from' => '11:00',
                            'to' => '11:30'
                        ],
                        [
                            'name' => 'Lion',
                            'image' => '🦁',
                            'from' => '13:00',
                            'to' => '13:30'
                        ],
                        [
                            'name' => 'Gorilla',
                            'image' => '🦍',
                            'from' => '14:00',
                            'to' => '14:30'
                        ],
                        [
                            'name' => 'Penguin',
                            'image' => '🐧',
                            'from' => '15:00',
                            'to' => '15:30'
                        ],
                        [
                            'name' => 'Elephant',
                            'image' => '🐘',
                            'from' => '16:00',
                            'to' => '16:30'
                        ], 
                    ],
            '2023-10-31' => [
                        [
                            'name' => 'Elephant',
                            'image' => '🐘',
                            'from' => '10:00',
                            'to' => '10:30'
                        ],
                        [
                            'name' => 'Camel',
                            'image' => '🐪',
                            'from' => '11:00',
                            'to' => '11:30'
                        ],
                        [
                            'name' => 'Panda',
                            'image' => '🐼',
                            'from' => '13:00',
                            'to' => '13:30'
                        ],
                        [
                            'name' => 'Sheep',
                            'image' => '🐑',
                            'from' => '16:00',
                            'to' => '16:30'
                        ], 
                    ],
            '2023-09-20'=> [
                        [
                            'name' => 'Panda',
                            'image' => '🐼',
                            'from' => '13:00',
                            'to' => '14:00'
                        ],
                    ],
            '2023-10-10'=> [
                        [
                            'name' => 'Panda',
                            'image' => '🐼',
                            'from' => '10:00',
                            'to' => '10:30'
                        ],
                        [
                            'name' => 'Pig',
                            'image' => '🐖',
                            'from' => '11:00',
                            'to' => '11:30'
                        ],
                        [
                            'name' => 'Gorilla',
                            'image' => '🦍',
                            'from' => '14:00',
                            'to' => '14:30'
                        ],
                        [
                            'name' => 'Monkey',
                            'image' => '🐵',
                            'from' => '15:00',
                            'to' => '16:00'
                        ],
                        [
                            'name' => 'Bear',
                            'image' => '🐻',
                            'from' => '16:00',
                            'to' => '16:30'
                        ], 
                    ],
            '2023-10-29'=> [
                        [
                            'name' => 'Bear',
                            'image' => '🐻',
                            'from' => '10:00',
                            'to' => '10:30'
                        ],
                        [
                            'name' => 'Lion',
                            'image' => '🦁',
                            'from' => '11:00',
                            'to' => '11:30'
                        ],
                        [
                            'name' => 'Owl',
                            'image' => '🦉',
                            'from' => '13:00',
                            'to' => '13:30'
                        ],
                        [
                            'name' => 'dolphin',
                            'image' => '🐬',
                            'from' => '14:00',
                            'to' => '15:00'
                        ],
                        [
                            'name' => 'Elephant',
                            'image' => '🐘',
                            'from' => '15:00',
                            'to' => '15:30'
                        ],
                        [
                            'name' => 'Panda',
                            'image' => '🐼',
                            'from' => '16:00',
                            'to' => '16:30'
                        ],
                        [
                            'name' => 'Penguin',
                            'image' => '🐧',
                            'from' => '16:30',
                            'to' => '17:00'
                        ],
                        [
                            'name' => 'Hippo',
                            'image' => '🦛',
                            'from' => '16:00',
                            'to' => '17:00'
                        ],  
                    ],
            '2023-11-03'=> [
                        [
                            'name' => 'Dolphin',
                            'image' => '🐬',
                            'from' => '10:00',
                            'to' => '11:00'
                        ],
                        [
                            'name' => 'Tiger',
                            'image' => '🐯',
                            'from' => '13:00',
                            'to' => '13:30'
                        ],
                        [
                            'name' => 'Monkey',
                            'image' => '🐵',
                            'from' => '14:00',
                            'to' => '15:00'
                        ],
                        [
                            'name' => 'Polar Bear',
                            'image' => '🐻‍❄️',
                            'from' => '15:00',
                            'to' => '15:30'
                        ],
                    ],
                ];
        

        // Sort events by the date
        ksort($animalShows);
        $this->sortedAnimalShows = $animalShows;
    }

    /**
     * Set the date a user clicked as $selectedDay
     */
    public function setSelectedDay($selectedDay)
    {
        $this->selectedDay = $selectedDay;

        // To reset the array
        $this->sortAnimalShows();

        if($this->selectedDay !== null) {
            $this->updateAnimalShows($this->selectedDay);
        }
    }

    /**
     * Display all the events on or after the selectedDay
     */
    public function updateAnimalShows($selectedDay)
    {
        $filteredResults = [];

        // $this->selectedMonth is set by the function that will be created later!!
        // $nextMonth = date('Y-m-d', strtotime('+1 month', strtotime($this->selectedMonth)));

        foreach ($this->sortedAnimalShows as $date => $shows) {
            // if (strtotime($date) >= strtotime($selectedDay) && strtotime($date) < strtotime($nextMonth)) {
            if (strtotime($date) >= strtotime($selectedDay)) {
                $filteredResults[$date] = $shows;
            }
        }

        ksort($filteredResults);
        $this->sortedAnimalShows = $filteredResults;
    }

    /**
     * Set the month when a calendar's date range is set or changed
     */
    public function setSelectedMonth($selectedMonth)
    {
        $this->selectedMonth = $selectedMonth;

        // To reset the array
        $this->sortAnimalShows();

        if($this->selectedMonth !== null) {
            $this->updateAnimalShowsByMonth($this->selectedMonth);
        }

    }

    /**
     * Display only the events happening in the selected/displayed month
     */
    public function updateAnimalShowsByMonth($selectedMonth)
    {
        $filteredResults = [];
        $nextMonth = date('Y-m-d', strtotime('+1 month', strtotime($selectedMonth)));


        foreach ($this->sortedAnimalShows as $date => $shows) {
            if (strtotime($date) >= strtotime($selectedMonth) && strtotime($date) < strtotime($nextMonth)) {
                $filteredResults[$date] = $shows;
            }
        }

        ksort($filteredResults);
        $this->sortedAnimalShows = $filteredResults;
    }

}





