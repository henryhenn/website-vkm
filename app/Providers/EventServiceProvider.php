<?php

namespace App\Providers;

use App\Models\Absensi;
use App\Models\Acara;
use App\Models\GrupKelas;
use App\Models\Kelas;
use App\Models\QiuDao;
use App\Models\SekolahMinggu;
use App\Models\User;
use App\Observers\AbsensiObserver;
use App\Observers\AcaraObserver;
use App\Observers\AnggotaObserver;
use App\Observers\GrupKelasObserver;
use App\Observers\KelasObserver;
use App\Observers\QiuDaoObserver;
use App\Observers\SekolahMingguObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        User::observe(AnggotaObserver::class);
        Acara::observe(AcaraObserver::class);
        QiuDao::observe(QiuDaoObserver::class);
        SekolahMinggu::observe(SekolahMingguObserver::class);
        GrupKelas::observe(GrupKelasObserver::class);
        Kelas::observe(KelasObserver::class);
        Absensi::observe(AbsensiObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
