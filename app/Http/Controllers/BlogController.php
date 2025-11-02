<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Models\Pagservice;

class BlogController  extends Controller
{
    // index: يعرض قائمة المقالات مع pagination
    public function index(Request $request)
    {
        // ----------------------------
        // 1) إذا لديك نموذج Post من DB، فكّر في استبدال هذا الجزء:
        // $posts = \App\Models\Post::published()->latest()->paginate(6);
        // return view('blog.index', compact('posts'));
        // ----------------------------

        // fallback: بيانات تجريبية (من المحتوى الذي أرسلتَه)
        $items = [
            [
                'title' => 'أ. فالح الفالح رئيس لجنة السياحة والترفيه والفعاليات بـ #غرفة_الرياض',
                'excerpt' => 'أ. فالح الفالح رئيس لجنة السياحة والترفيه والفعاليات متحدثاً عن تطلعات اللجنة نحو خدمة القطاع.',
                'author' => 'Enala إنالة',
                'date' => '2025-03-04',
                'slug' => 'falih-alfalih-tours',
                'image' => '/images/blog/blog1.jpg',
                'category' => 'عام',
                'comments' => 0,
            ],
            [
                'title' => 'فوزر الرئيس التنفيذي لمجموعة إناله برئاسة لجنة السياحة والترفيه والفعاليات بغرفة الرياض',
                'excerpt' => 'فوزر الرئيس التنفيذي لمجموعة إناله للفنادق والمنتجعات برئاسة لجنة السياحة والترفيه والفعاليات بغرفة الرياض.',
                'author' => 'Enala إنالة',
                'date' => '2025-03-04',
                'slug' => 'enala-ceo-chair',
                'image' => '/images/blog/blog2.jpg',
                'category' => 'أخبار',
                'comments' => 0,
            ],
            [
                'title' => 'اليوم العالمي للرجل ومنتجعات إناله السياحية في الرياض',
                'excerpt' => 'يجسد اليوم العالمي للرجل فرصة لتقدير دور الرجال في المجتمع، ويعد منتجع إناله مكانًا للاحتفاء.',
                'author' => 'Enala إنالة',
                'date' => '2024-11-19',
                'slug' => 'international-mens-day-enala',
                'image' => '/images/blog/blog3.jpg',
                'category' => 'فعاليات',
                'comments' => 0,
            ],
            [
                'title' => 'اليوم العالمي للتأتأة: صوت الإرادة وقوة الكلمة',
                'excerpt' => 'نحتفل لنسلط الضوء على هذا الاضطراب اللغوي ونكرم من يواجهونه بإصرار.',
                'author' => 'Enala إنالة',
                'date' => '2023-10-22',
                'slug' => 'stuttering-awareness',
                'image' => '/images/blog/blog4.jpg',
                'category' => 'توعية',
                'comments' => 0,
            ],
            [
                'title' => 'اليوم العالمي للصحة النفسية: استثمار أفضل لرفاهيتك النفسية',
                'excerpt' => 'منتجعات إناله في الرياض تقدم فرصة للهدوء والاسترخاء وتحسين الصحة النفسية.',
                'author' => 'Enala إنالة',
                'date' => '2023-10-10',
                'slug' => 'world-mental-health-day',
                'image' => '/images/blog/blog5.jpg',
                'category' => 'صحة',
                'comments' => 0,
            ],
        ];

        // تحويل للمجموعة وعمل pagination على مصفوفة (حتى لو لم تستخدم DB)
        $perPage = 6;
        $page = $request->get('page', 1);
        $collection = collect($items);
        $currentPageItems = $collection->slice(($page - 1) * $perPage, $perPage)->values();
        $paginator = new LengthAwarePaginator(
            $currentPageItems,
            $collection->count(),
            $perPage,
            $page,
            ['path' => route('blog.index')]
        );

        return view('frontend.blog.index', ['posts' => $paginator]);
    }

    // show: صفحة المقال المفرد (مثال بسيط)
    public function show($slug)
    {
        // لو لديك DB، استخرج بالمَعرّف slug
        // $post = Post::where('slug', $slug)->firstOrFail();

        // fallback: محتوى تجريبي بسيط
        $post = [
            'title' => 'أملج .. بوابة الجمال على ساحل البحر الأحمر',
            'image' => '/images/blog/blog1.jpg',
            'content' => 'أملج، المدينة الساحرة التي تجمع بين سحر الطبيعة وتاريخ البحر الأحمر العريق، وجهة مثالية لعشاق البحر والهدوء.',
            'author' => 'Enala إنالة',
            'date' => '2025-03-04',
        ];

        return view('frontend.blog.show', compact('post'));
    }
      public function Pagservice()
    {
//         $pag_service = Pagservice::where('slug', $slug)->get();
// // return  $pag_service;
//         return view('frontend.our_services', compact('pag_service'));



    // $service = Pagservice::where('slug', $slug)
    //     ->with('images')
    //     ->firstOrFail();
        $services = Pagservice::with('images', 'features')->latest()->get();

    return view('frontend.our_services', compact('services'));


    }
}
