<div class="max-w-[1000px] mx-auto flex justify-center bg-white items-start">
    <div class="min-w-[300px] flex-1 mx-4 mt-6 sticky top-[24px]" wire:ignore>
        <div id='calendar' class="p-4 shadow-lg"></div>
    </div>

    <div class="flex-1 mx-10 text-center">
        <p class="p-6 text-3xl font-bold tracking-wider text-green-700">ABC Zoo</p>

        <ul>
        @php
            $isShow = false;
        @endphp

        @foreach ($sortedAnimalShows as $date => $shows)

            @php
                $formattedDateJa = \Carbon\Carbon::createFromFormat('Y-m-d', $date)
                ->locale('ja')
                ->isoFormat('MMMMDo(dd)');

                $formattedDateEn = \Carbon\Carbon::createFromFormat('Y-m-d', $date)
                ->isoFormat('MMM D (ddd)');
            @endphp

            <li class="border-dotted border-2 border-green-500 mt-2 mb-4 py-4">
                {{-- <p class="text-2xl font-semibold py-2 text-orange-600">{{ $formattedDateJa }}</p> --}}
                <p class="text-2xl font-semibold py-2 text-orange-600">{{ $formattedDateEn }}</p>

                @foreach ($shows as $show)

                @php
                    $isShow = true;
                @endphp

                <p class="border-solid border-2 border-black-500 rounded-xl w-1/4 mx-auto"></p>
                <p class="text-xl pt-4">{{ $show['name'] }} Show</p>
                <p class="text-5xl py-2">{{ $show['image'] }}</p>
                <p class="pb-4">Time:  {{ $show['from'] }} - {{ $show['to'] }}</p>
                
                    
                @endforeach
            </li>
        @endforeach

        @if (!$isShow)
            <li>No show available</li>
        @endif

        </ul>
    </div>
</div>


{{-- @push('styles')
    <style>
    .fc .selected-date {
        outline: 5px solid red !important;
        outline-offset: -5px;
    }
    </style>
@endpush --}}


@push('scripts')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      let calendarEl = document.getElementById('calendar');
      let data = @json($events);
      let selectedMonth;
      let calendar = new FullCalendar.Calendar(calendarEl, {
        // Display a monthly calendar
        initialView: 'dayGridMonth',
        // Set the locale to Japanese
        locale: 'ja',
        // Set the day that each week begins with. Sun = 0
        firstDay: 0,
        // Display the month at the center with navigation buttons on the sides
        headerToolbar: {
            center: 'title',
            left: 'prev',
            right: 'next'
        },
        // Show the month with year and month
        // This may be deprecated, but necessary for Japanese
        dayGridMonth: {
            titleFormat: { year: 'numeric', month: 'numeric' },
            },
        // Set the height of the calendar's view area
        contentHeight: 'auto',
        // Limit the dates the user can navigate to and where events can be placed
        validRange: {
            start: new Date(new Date().getFullYear(), new Date().getMonth(), 1),
        },
        // Determine the number of weeks displayed in a month view
        fixedWeekCount: false,
        // When set to Japanese, it displays '1日' for all days.
        // This setting elilminates the '日'
        dayCellContent: function(e) {
            return e.dayNumberText.replace('日', '');
        },

        // Display Event Objects on the calendar. (An array is used.)
        events: data,

        // Triggered when the user clicks on a date or a time
        dateClick: function (info) {
            //  console.log('info', info);

            // Get the information about the clicked date
            let selectedDay = info.dateStr;

            // Call the function setSelectedDay() in Livewire using '@this.'
            @this.setSelectedDay(selectedDay);

            // Add a red border to the selected date
            let selectedDateElements = document.querySelectorAll('.selected-date');
            selectedDateElements.forEach(function(element) {
                element.classList.remove('selected-date');
            });
            let selectedDateCell = info.dayEl;
            selectedDateCell.classList.add('selected-date');
        },

        // Called after the calendar’s date range has been initially set 
        // or changed in some way, and the DOM has been updated
        datesSet: function(info) {
            selectedMonth = info.view.currentStart.toISOString().substring(0, 10);
            @this.setSelectedMonth(selectedMonth);
        },

      });

      calendar.render();

    });
</script>
@endpush
