<?php

namespace App\Http\Controllers;

use App\Models\PerformanceActor;
use App\Models\PerformanceCalendar;
use App\Repositories\HomePageRepository;
use Illuminate\Http\Request;
use SEO;

class EventDateController extends Controller
{

    protected $homePageRepository;

    public function __construct(HomePageRepository $homePageRepository)
    {
        $this->homePageRepository = $homePageRepository;
    }

    /**
     * @param PerformanceCalendar $performanceCalendar
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(PerformanceCalendar $performanceCalendar)
    {
        $performance = $performanceCalendar
            ->performance()
            ->whereIsPublished(true)
            ->with(
                'translate',
                'type',
                'type.translate',
                'dates',
                'videos',
                'articles',
                'articles.media',
                'articles.translate'
            )->first();

        $dateIds = $performance->dates->pluck('id');
        $dateActors = PerformanceActor::with([
            'date',
            'actor',
            'actor.translate',
            'actor.media',
        ])->whereIn('performance_calendar_id', $dateIds)->get();

        $groupActorDates = $dateActors->groupBy('actor_id');

        $homePageComponents = $this->homePageRepository->getAllComponents();

        SEO::setTitle($performance->translate->seo_title);
        SEO::setDescription($performance->translate->seo_description);

        return view('pages.theatre.pages.event-date', compact(
            'performance',
            'performanceCalendar',
            'groupActorDates',
            //'actors',
            'homePageComponents'
        ));
    }
}
