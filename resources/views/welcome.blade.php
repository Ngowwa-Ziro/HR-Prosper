<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Prosper – Your Trusted HR Partner</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom gradient for hero & footer */
        .hero-gradient { background: linear-gradient(180deg, #0A7EF5 0%, #005BBB 100%); }
        .footer-gradient { background: linear-gradient(180deg, #005BBB 0%, #003F7D 100%); }
        .testimonial-bg { background: linear-gradient(180deg, #FF6B35 0%, #FF8C00 100%); }
        .services-bg   { background: linear-gradient(180deg, #0A7EF5 0%, #0066CC 100%); }

        /* Simple carousel dots */
        .carousel-dot { @apply w-2 h-2 rounded-full bg-gray-400 mx-1; }
        .carousel-dot.active { @apply bg-gray-700; }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">

{{-- ====================== NAVBAR ====================== --}}
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="#" class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-red-600">HR</span>
                <span class="text-2xl font-bold text-blue-600">PROSPER</span>
            </a>

            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium">About Us</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium">Services</a>
                <a href="#jobs" class="text-gray-700 hover:text-blue-600 font-medium">Jobs</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
            </div>

            <a href="#consultation"
               class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">
                Request A Consultation
            </a>
        </div>
    </div>
</nav>

{{-- ====================== HERO ====================== --}}
<section id="home" class="hero-gradient text-white py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Your Trusted HR Partner For Growth,<br>
            Compliance & People Solutions
        </h1>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto">
            We provide end-to-end HR outsourcing, recruitment, payroll, and staff management services
            that allow organizations to focus on strategy and performance while we handle their most
            valuable asset – their people.
        </p>
        <a href="#services"
           class="inline-flex items-center bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-700 transition">
            Explore Our Services
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</section>

{{-- ====================== CLIENT LOGOS ====================== --}}
<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold text-gray-700 mb-8">Companies That Trust Us</h2>
        <div class="flex flex-wrap justify-center items-center gap-8">
            {{-- Replace src with real logos later --}}
            <img src="https://via.placeholder.com/120x60?text=AO" alt="AO" class="h-12">
            <img src="https://via.placeholder.com/120x60?text=Anami+R" alt="Anami R" class="h-12">
            <img src="https://via.placeholder.com/120x60?text=GetCash" alt="GetCash" class="h-12">
            <img src="https://via.placeholder.com/120x60?text=Software+People" alt="Software People" class="h-12">
            <img src="https://via.placeholder.com/120x60?text=BETTER" alt="BETTER" class="h-12">
        </div>

        <div class="flex justify-center mt-6 space-x-2">
            <span class="carousel-dot active"></span>
            <span class="carousel-dot"></span>
            <span class="carousel-dot"></span>
        </div>
    </div>
</section>

{{-- ====================== TESTIMONIALS ====================== --}}
<section class="testimonial-bg text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold mb-10">What our clients say</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Left testimonial -->
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                <p class="italic mb-4">
                    “This is due to their excellent service, competitive pricing and customer support.
                    It’s thoroughly refreshing to get such a personal touch.”
                </p>
                <div class="flex items-center justify-center">
                    <img src="https://i.pravatar.cc/60?u=john" alt="John Kongo" class="w-12 h-12 rounded-full">
                    <div class="ml-3 text-left">
                        <p class="font-medium">John Kongo</p>
                        <p class="text-sm text-gray-600">Driver</p>
                    </div>
                </div>
            </div>

            <!-- Center (highlighted) -->
            <div class="bg-blue-600 text-white p-6 rounded-lg shadow-lg transform scale-105">
                <p class="italic mb-4">
                    “This is due to their excellent service, competitive pricing and customer support.
                    It’s thoroughly refreshing to get such a personal touch.”
                </p>
                <div class="flex items-center justify-center">
                    <img src="https://i.pravatar.cc/60?u=daniel" alt="Daniel Sumbua" class="w-12 h-12 rounded-full border-2 border-white">
                    <div class="ml-3 text-left">
                        <p class="font-medium">Daniel Sumbua</p>
                        <p class="text-sm">Businessman</p>
                    </div>
                </div>
            </div>

            <!-- Right testimonial -->
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                <p class="italic mb-4">
                    “This is due to their excellent service, competitive pricing and customer support.
                    It’s thoroughly refreshing to get such a personal touch.”
                </p>
                <div class="flex items-center justify-center">
                    <img src="https://i.pravatar.cc/60?u=mary" alt="Mary Naposa" class="w-12 h-12 rounded-full">
                    <div class="ml-3 text-left">
                        <p class="font-medium">Mary Naposa</p>
                        <p class="text-sm text-gray-600">Fashion Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ====================== SERVICES ====================== --}}
<section id="services" class="services-bg text-white py-20">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-8">
        @php
            $services = [
                ['icon' => 'recruitment.svg', 'title' => 'Recruitment & Staffing',
                 'desc' => 'We source, screen, and place the right talent for your business, from entry-level to executive positions...'],
                ['icon' => 'outsourcing.svg', 'title' => 'HR Outsourcing',
                 'desc' => 'We act as your HR department – managing daily HR operations, contracts, policies, and compliance...'],
                ['icon' => 'payroll.svg', 'title' => 'Payroll & Compliance',
                 'desc' => 'We simplify payroll by handling salary processing, payslips, and statutory deductions (PAYE, NHIF, NSSF, HELB)...'],
                ['icon' => 'training.svg', 'title' => 'Training & Development',
                 'desc' => 'We design and deliver capacity-building programs tailored to your needs...'],
                ['icon' => 'relations.svg', 'title' => 'Employee Relations',
                 'desc' => 'We help organizations create and maintain positive workplace cultures...'],
                ['icon' => 'performance.svg', 'title' => 'Performance Management',
                 'desc' => 'We help organizations set clear KPIs, implement appraisal systems...'],
            ];
        @endphp

        @foreach($services as $s)
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/48?text={{ substr($s['title'],0,1) }}" alt="{{ $s['title'] }}" class="mb-4">
                <h3 class="text-xl font-semibold text-orange-600 mb-2">{{ $s['title'] }}</h3>
                <p class="text-sm">{{ Str::limit($s['desc'], 120) }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ====================== BLOG PREVIEW ====================== --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Our Blog</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach(['Recruitment', 'Training', 'Employee Relations'] as $i => $title)
                <article class="group">
                    <img src="https://i.pravatar.cc/400?img={{ $i + 10 }}" alt="{{ $title }}" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 bg-gray-50 rounded-b-lg">
                        <h3 class="font-semibold text-lg text-orange-600 group-hover:text-orange-700">
                            {{ $title }}
                        </h3>
                        <a href="#" class="inline-block mt-2 text-blue-600 hover:underline">
                            Read More →
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ====================== NEWSLETTER ====================== --}}
<section class="bg-gray-100 py-12">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold mb-4">Subscribe Our NEWSLETTER</h2>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input type="email" placeholder="Enter email address here"
                   class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                    class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition">
                SUBMIT
            </button>
        </form>
    </div>
</section>

{{-- ====================== WHAT DRIVES US ====================== --}}
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-12">What drives us</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-6 rounded-lg">
                <div class="w-16 h-16 mx-auto mb-4 bg-white rounded-full flex items-center justify-center">
                    <img src="https://via.placeholder.com/32?text=M" alt="Mission">
                </div>
                <h3 class="font-semibold text-orange-600">Our Mission</h3>
                <p class="mt-2 text-sm">To deliver reliable, compliant, and cost-effective HR solutions.</p>
            </div>

            <div class="bg-gradient-to-br from-orange-500 to-red-600 p-6 rounded-lg text-white transform scale-105">
                <div class="w-16 h-16 mx-auto mb-4 bg-white rounded-full flex items-center justify-center">
                    <img src="https://via.placeholder.com/32?text=V" alt="Vision">
                </div>
                <h3 class="font-semibold">Our Vision</h3>
                <p class="mt-2 text-sm">To be the HR partner of choice in Kenya and beyond.</p>
            </div>

            <div class="bg-gray-100 p-6 rounded-lg">
                <div class="w-16 h-16 mx-auto mb-4 bg-white rounded-full flex items-center justify-center">
                    <img src="https://via.placeholder.com/32?text=Val" alt="Values">
                </div>
                <h3 class="font-semibold text-orange-600">Our Values</h3>
                <p class="mt-2 text-sm">Integrity | Excellence | Partnership | Innovation | Growth</p>
            </div>
        </div>
    </div>
</section>

{{-- ====================== FOOTER ====================== --}}
<footer class="footer-gradient text-white py-12">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-8">
        <div>
            <div class="flex items-center space-x-1 mb-4">
                <span class="text-2xl font-bold text-red-500">HR</span>
                <span class="text-2xl font-bold">PROSPER</span>
            </div>
            <p class="text-sm">
                We believe that people are at the heart of every successful business. Our job is to help
                organizations attract, nurture, and retain talent while HR systems that support long-term growth and compliance.
            </p>
            <div class="flex space-x-3 mt-4">
                <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                    <span class="text-xs">f</span>
                </a>
                <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                    <span class="text-xs">in</span>
                </a>
            </div>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Quick Links</h4>
            <ul class="space-y-1 text-sm">
                <li><a href="#" class="hover:underline">About Us</a></li>
                <li><a href="#" class="hover:underline">Our Service</a></li>
                <li><a href="#" class="hover:underline">Our Careers</a></li>
                <li><a href="#" class="hover:underline">Testimonial</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Our Service</h4>
            <ul class="space-y-1 text-sm">
                <li><a href="#" class="hover:underline">Recruitment & Staffing</a></li>
                <li><a href="#" class="hover:underline">HR Outsourcing</a></li>
                <li><a href="#" class="hover:underline">Payroll & Compliance</a></li>
                <li><a href="#" class="hover:underline">Training & Development</a></li>
                <li><a href="#" class="hover:underline">Employee Relations</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold mb-3">Contact Us</h4>
            <p class="text-sm">
                Eden Square Complex,<br>
                Chiromo Road, Westlands 7th Flr,<br>
                Block 1, Nairobi, Kenya<br>
                <a href="mailto:info@HrProsper.com" class="hover:underline">info@HrProsper.com</a><br>
                <a href="tel:+254700000000" class="hover:underline">+254 700 000 000</a>
            </p>
        </div>
    </div>

    <div class="mt-10 border-t border-white/20 pt-4 text-center text-sm">
        <p>Copyright ©{{ date('Y') }} HRProsper. All Rights Reserved</p>
        <div class="flex justify-center space-x-6 mt-2">
            <a href="#" class="hover:underline">Terms & Conditions</a>
            <a href="#" class="hover:underline">Privacy Policy</a>
        </div>
    </div>
</footer>

</body>
</html>
