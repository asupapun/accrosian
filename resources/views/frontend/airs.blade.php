@extends('layouts.app')

@section('meta_title', 'AIRS – India\'s First Structured Bridge Between Campus and Corporate')
@section('meta_description', 'AIRS by Accrosian transforms students into industry-ready problem solvers.')

@section('content')

{{-- ═══════════ HERO ═══════════ --}}
<section
    style="position:relative;overflow:hidden;min-height:100vh;display:flex;align-items:center;padding:120px 0 80px;background:url('{{ asset('assets/images/student-reg-img.png') }}') center/cover no-repeat;">

    {{-- Animated background --}}
    <div style="position:absolute;inset:0;z-index:0">
        <div style="position:absolute;width:700px;height:700px;border-radius:50%;
                    background:radial-gradient(circle,rgba(255,107,53,0.12) 0%,transparent 70%);
                    top:-200px;left:-200px;animation:airsOrb1 8s ease-in-out infinite"></div>
        <div style="position:absolute;width:600px;height:600px;border-radius:50%;
                    background:radial-gradient(circle,rgba(108,99,255,0.1) 0%,transparent 70%);
                    bottom:-150px;right:-150px;animation:airsOrb2 10s ease-in-out infinite"></div>
        <div style="position:absolute;inset:0;
                    background-image:linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);
                    background-size:60px 60px"></div>
    </div>

    <div class="container" style="position:relative;z-index:2">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center">

            {{-- LEFT --}}
            <div>
                <div style="display:inline-flex;align-items:center;gap:8px;
                            background:rgba(255,107,53,0.1);border:1px solid rgba(255,107,53,0.35);
                            color:var(--white);padding:7px 18px;border-radius:30px;
                            font-size:0.82rem;font-weight:700;margin-bottom:28px;letter-spacing:0.5px">
                    <span style="width:7px;height:7px;border-radius:50%;background:var(--white);
                                 display:inline-block;animation:airsPulse 2s infinite"></span>
                    An Initiative by Accrosian
                </div>

                <h1 style="font-family:var(--font-display);font-size:clamp(2.2rem,4.5vw,3.4rem);
                           font-weight:900;line-height:1.1;color:var(--white);margin-bottom:22px">
                    India's First Structured Bridge Between
                    <span style="background:var(--gradient-orange);
                                 -webkit-background-clip:text;-webkit-text-fill-color:transparent">
                        Campus and Corporate
                    </span>
                </h1>

                <p style="color:var(--text-light);font-size:1.05rem;line-height:1.85;margin-bottom:36px;
                          max-width:520px">
                    AIRS transforms students into industry-ready problem solvers through structured preparation,
                    real-world understanding, and effective use of AI.
                </p>

                <div style="display:flex;gap:16px;flex-wrap:wrap;margin-bottom:52px">
                    <a href="{{ route('student.register') }}" style="display:inline-flex;align-items:center;gap:10px;
                              background:var(--orange);color:#fff;padding:15px 34px;
                              border-radius:12px;font-weight:700;font-size:1rem;
                              text-decoration:none;transition:all 0.3s;
                              box-shadow:0 8px 30px rgba(255,107,53,0.35)"
                        onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 12px 40px rgba(255,107,53,0.5)'"
                        onmouseout="this.style.transform='';this.style.boxShadow='0 8px 30px rgba(255,107,53,0.35)'">
                        🚀 Join AIRS
                    </a>
                    <a href="#fellowship" style="display:inline-flex;align-items:center;gap:10px;
                              border:2px solid rgba(255,255,255,0.2);color:var(--white);
                              padding:13px 30px;border-radius:12px;font-weight:600;
                              font-size:1rem;text-decoration:none;transition:all 0.3s;
                              background:rgba(255,255,255,0.04)"
                        onmouseover="this.style.borderColor='var(--orange)';this.style.color='var(--orange)'"
                        onmouseout="this.style.borderColor='rgba(255,255,255,0.2)';this.style.color='var(--white)'">
                        🎯 Apply for Fellowship
                    </a>
                </div>

                <!-- {{-- Stats --}}
                <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;
                            padding:24px;background:rgba(255,255,255,0.03);
                            border:1px solid rgba(255,255,255,0.06);border-radius:16px">
                    @foreach([['500+','Students'],['50+','Colleges'],['92%','Placement'],['100%','Aligned']] as [$n,$l])
                    <div style="text-align:center">
                        <div style="font-family:var(--font-display);font-size:1.6rem;font-weight:900;
                                    color:var(--orange);line-height:1">{{ $n }}</div>
                        <div style="color:var(--text-muted);font-size:0.78rem;margin-top:4px">{{ $l }}</div>
                    </div>
                    @endforeach
                </div> -->
            </div>

            {{-- RIGHT — Bridge Visual --}}
            <div style="position:relative">

                {{-- Main bridge card --}}
                <div style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.09);
                            border-radius:24px;padding:36px 28px;
                            backdrop-filter:blur(20px);
                            box-shadow:0 40px 80px rgba(0,0,0,0.3)">

                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px">
                        {{-- College --}}
                        <div style="text-align:center">
                            <div style="width:80px;height:80px;border-radius:20px;
                                        background:linear-gradient(135deg,#1e3a8a,#2563eb);
                                        display:flex;align-items:center;justify-content:center;
                                        font-size:2.2rem;margin:0 auto 12px;
                                        box-shadow:0 8px 24px rgba(37,99,235,0.3)">🎓</div>
                            <div style="font-weight:800;color:var(--white);font-size:0.95rem">College</div>
                            <div style="color:var(--text-muted);font-size:0.78rem;margin-top:4px">Campus Life</div>
                        </div>

                        {{-- Bridge --}}
                        <div style="flex:1;padding:0 16px;text-align:center">
                            <div style="height:3px;background:linear-gradient(90deg,#2563eb,var(--orange));
                                        border-radius:2px;margin-bottom:12px"></div>
                            <div style="background:linear-gradient(135deg,var(--orange),#ff9a5c);
                                        color:#fff;font-weight:900;font-size:0.85rem;
                                        padding:8px 16px;border-radius:10px;
                                        letter-spacing:2px;display:inline-block;
                                        box-shadow:0 6px 20px rgba(255,107,53,0.4)">AIRS</div>
                            <div style="height:3px;background:linear-gradient(90deg,var(--orange),#2563eb);
                                        border-radius:2px;margin-top:12px"></div>
                        </div>

                        {{-- Corporate --}}
                        <div style="text-align:center">
                            <div style="width:80px;height:80px;border-radius:20px;
                                        background:linear-gradient(135deg,#064e3b,#059669);
                                        display:flex;align-items:center;justify-content:center;
                                        font-size:2.2rem;margin:0 auto 12px;
                                        box-shadow:0 8px 24px rgba(5,150,105,0.3)">🏢</div>
                            <div style="font-weight:800;color:var(--white);font-size:0.95rem">Corporate</div>
                            <div style="color:var(--text-muted);font-size:0.78rem;margin-top:4px">Industry World</div>
                        </div>
                    </div>

                    <div style="border-top:1px solid rgba(255,255,255,0.06);padding-top:20px;
                                display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px">
                        @foreach([['📚','Theory → Practice'],['🤖','AI Integration'],['🏆','Career Ready']] as [$e,$t])
                        <div style="text-align:center;background:rgba(255,255,255,0.03);
                                    border-radius:10px;padding:12px 8px">
                            <div style="font-size:1.3rem;margin-bottom:6px">{{ $e }}</div>
                            <div style="font-size:0.75rem;color:var(--text-muted);font-weight:600">{{ $t }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Floating cards --}}
                <div style="position:absolute;top:-20px;right:-20px;
                            background:var(--navy-mid);border:1px solid rgba(255,255,255,0.1);
                            border-radius:14px;padding:12px 18px;
                            display:flex;align-items:center;gap:12px;
                            box-shadow:0 8px 30px rgba(0,0,0,0.3);
                            animation:airsFloat1 4s ease-in-out infinite">
                    <span style="font-size:1.6rem">⚡</span>
                    <div>
                        <div style="font-size:0.85rem;font-weight:700;color:var(--white)">Industry Ready</div>
                        <div style="font-size:0.72rem;color:var(--text-muted)">In 90 Days</div>
                    </div>
                </div>

                <div style="position:absolute;bottom:-20px;left:-20px;
                            background:var(--navy-mid);border:1px solid rgba(255,255,255,0.1);
                            border-radius:14px;padding:12px 18px;
                            display:flex;align-items:center;gap:12px;
                            box-shadow:0 8px 30px rgba(0,0,0,0.3);
                            animation:airsFloat2 4s ease-in-out infinite 2s">
                    <span style="font-size:1.6rem">🤖</span>
                    <div>
                        <div style="font-size:0.85rem;font-weight:700;color:var(--white)">AI Powered</div>
                        <div style="font-size:0.72rem;color:var(--text-muted)">Learning Path</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════ WHAT IS AIRS ═══════════ --}}
<section style=" padding:60px 0;background:var(--white)">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:70px;align-items:center">

            <div class="reveal">
                <span class="section-tag">About AIRS</span>
                <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.4rem);
                           font-weight:900;color:var(--navy);margin:16px 0;line-height:1.2">
                    What is <span class="text-gradient">AIRS?</span>
                </h2>
                <p style="color:var(--black);font-weight:700;margin-bottom:28px;font-size:1rem">
                    Bridging the gap between learning and industry.
                </p>

                @foreach([
                ['What the current job market looks like','📊'],
                ['What skills actually matter','🎯'],
                ['How to prepare in a structured way','📐'],
                ['How to use AI effectively','🤖'],
                ] as [$item,$emoji])
                <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px;
                            padding:16px 20px;background:var(--navy-light);color:var(--white);
                            border:1px solid rgba(255,255,255,0.06);border-radius:12px;
                            transition:all 0.3s"
                    onmouseover="this.style.borderColor='rgba(255,107,53,0.3)';this.style.background='var(--navy)'"
                    onmouseout="this.style.borderColor='rgba(255,255,255,0.06)';this.style.background='var(--navy-light)'">
                    <div style="width:36px;height:36px;border-radius:10px;
                                background:var(--navy-light);color:var(--white);
                                display:flex;align-items:center;justify-content:center;
                                font-size:0.75rem;font-weight:800;color:#22c55e;flex-shrink:0">✓</div>
                    <span style="color:var(--black);font-size:0.95rem">{{ $item }}</span>
                    <span style="margin-left:auto;font-size:1.2rem">{{ $emoji }}</span>
                </div>
                @endforeach

                <a href="{{ route('student.register') }}" style="display:inline-flex;align-items:center;gap:10px;
                          background:var(--orange);color:#fff;padding:14px 32px;
                          border-radius:12px;font-weight:700;text-decoration:none;
                          margin-top:28px;transition:all 0.3s" onmouseover="this.style.transform='translateY(-2px)'"
                    onmouseout="this.style.transform=''">
                    Join AIRS Now →
                </a>
            </div>

            {{-- Campus-Corporate Visual --}}
            <div class="reveal" style="display:flex;flex-direction:column;gap:16px">
                {{-- Campus side --}}
                <div style="background:var(--navy-light);
                            border:1px solid rgba(37,99,235,0.3);border-radius:16px;padding:24px">
                    <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px">
                        <div style="font-size:2rem;background:var(--navy);
                                    width:52px;height:52px;border-radius:14px;
                                    display:flex;align-items:center;justify-content:center">🎓</div>
                        <div>
                            <div style="font-weight:800;color:var(--white);font-size:1rem">Campus Reality</div>
                            <div style="color:var(--white);font-size:0.82rem">What students currently face
                            </div>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:8px">
                        @foreach(['Theoretical Knowledge Only','Academic Projects Only','No Industry Connect'] as $i)
                        <div style="display:flex;align-items:center;gap:10px;
                                    background:rgba(235,87,87,0.08);border-radius:8px;padding:8px 12px">
                            <span style="color:#eb5757;font-size:0.8rem;font-weight:700">✗</span>
                            <span style="color:var(--white);font-size:0.85rem">{{ $i }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- AIRS Bridge --}}
                <div style="background:linear-gradient(135deg,var(--orange),#ff9a5c);
                            border-radius:14px;padding:18px 24px;
                            display:flex;align-items:center;justify-content:space-between">
                    <span style="color:#fff;font-size:0.9rem;font-weight:700">🌉 AIRS bridges the gap</span>
                    <span style="color:rgba(255,255,255,0.8);font-size:1.4rem">→</span>
                </div>

                {{-- Corporate side --}}
                <div style="background:var(--navy-light);
                            border:1px solid rgba(5,150,105,0.3);border-radius:16px;padding:24px">
                    <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px">
                        <div style="font-size:2rem;background:rgba(5,150,105,0.2);
                                    width:52px;height:52px;border-radius:14px;
                                    display:flex;align-items:center;justify-content:center">🏢</div>
                        <div>
                            <div style="font-weight:800;color:var(--white);font-size:1rem">Corporate Ready</div>
                            <div style="color:var(--white);font-size:0.82rem">What industry expects</div>
                        </div>
                    </div>
                    <div style="display:flex;flex-direction:column;gap:8px">
                        @foreach(['Real Project Experience','Industry-Grade Skills','Professional Mindset'] as $i)
                        <div style="display:flex;align-items:center;gap:10px;
                                    background:rgba(34,197,94,0.08);border-radius:8px;padding:8px 12px">
                            <span style="color:#22c55e;font-size:0.8rem;font-weight:700">✓</span>
                            <span style="color:var(--white);font-size:0.85rem">{{ $i }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════ THE GAP IS REAL ═══════════ --}}
<section style="padding:60px 0;background:var(--white)">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">The Problem</span>
            <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.4rem);
                       font-weight:900;color:var(--navy);margin:16px 0">
                The Gap is <span class="text-gradient">Real</span>
            </h2>
            <p style="color:var(--black);max-width:500px;margin:0 auto;line-height:1.7">
                Talent exists. Opportunity exists.
                <em style="color:var(--black);font-style:normal;font-weight:700">But the connection is missing.</em>
            </p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:24px">
            @foreach([
            ['🧭','No Clear Direction','Students don\'t know where to focus their energy and
            skills.','rgba(255,107,53,0.1)','rgba(255,107,53,0.3)'],
            ['📋','Surface-Level Projects','College projects lack real-world depth and industry
            relevance.','rgba(108,99,255,0.1)','rgba(108,99,255,0.3)'],
            ['🤖','Unstructured AI Use','AI tools used without strategy, leading to poor
            outcomes.','rgba(235,87,87,0.1)','rgba(235,87,87,0.3)'],
            ['🏭','No Industry Exposure','Zero connection to how real companies think and
            operate.','rgba(86,204,242,0.1)','rgba(86,204,242,0.3)'],
            ] as [$icon,$title,$desc,$bg,$border])
            <div class="reveal" style="background:var(--navy-light);border:1px solid {{ $border }};
                        border-radius:20px;padding:32px 24px;text-align:center;
                        transition:all 0.3s;cursor:default"
                onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 20px 50px rgba(0,0,0,0.3)'"
                onmouseout="this.style.transform='';this.style.boxShadow=''">
                <div style="font-size:2.8rem;margin-bottom:18px">{{ $icon }}</div>
                <h4 style="font-family:var(--font-display);font-weight:800;color:var(--white);
                           font-size:0.95rem;margin-bottom:12px">{{ $title }}</h4>
                <p style="color:var(--white);font-size:0.83rem;line-height:1.65">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════ WHY AIRS ═══════════ --}}
<section style=" padding:60px 0;background:var(--white)">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Our Solution</span>
            <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.4rem);
                       font-weight:900;color:var(--navy);margin:16px 0">
                Why <span class="text-gradient">AIRS?</span>
            </h2>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px">
            @foreach([
            ['🏭','Industry Reality Exposure','#ff6b35','Understand what each role really demands — not just job
            descriptions, but day-to-day reality.','Learn industry expectations','Know hiring criteria'],
            ['📐','Structured Preparation','#6c63ff','A clear path with zero confusion — know exactly what to study and
            in what order.','Step-by-step roadmap','Interview & beyond'],
            ['🤖','Effective Use of AI','#eb5757','Use AI to enhance your abilities, not as a crutch — applied to real
            industry-level work.','AI as skill multiplier','Before & after projects'],
            ['💡','Real Project Ownership','#56ccf2','Not just building — explaining, presenting, and owning your work
            like a professional.','Own projects fully','Explain with confidence'],
            ] as [$icon,$title,$color,$desc,$p1,$p2])
            <div class="reveal" style="border-radius:20px;overflow:hidden;
                        border:1px solid rgba(255,255,255,0.06);
                        background:rgba(49, 36, 167, 0.42);
                        transition:transform 0.3s" onmouseover="this.style.transform='translateY(-8px)'"
                onmouseout="this.style.transform=''">
                <div style="background:{{ $color }};padding:20px 22px;
                            display:flex;align-items:center;gap:12px">
                    <span style="font-size:1.5rem">{{ $icon }}</span>
                    <span style="font-family:var(--font-display);font-weight:800;
                                 color:#fff;font-size:0.92rem">{{ $title }}</span>
                </div>
                <div style="padding:22px">
                    <p style="color:var(--black);font-size:0.85rem;
                              line-height:1.7;margin-bottom:16px">{{ $desc }}</p>
                    <div style="display:flex;flex-direction:column;gap:8px">
                        @foreach([$p1,$p2] as $point)
                        <div style="display:flex;align-items:center;gap:8px;
                                    font-size:0.8rem;color:var(--black)">
                            <span style="color:var(--black);font-weight:700">✓</span>
                            {{ $point }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════ BEFORE VS AFTER ═══════════ --}}
<section style="padding:60px 0;background:var(--white)">
    <div class="container" style="max-width:920px">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Transformation</span>
            <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.4rem);
                       font-weight:900;color:var(--navy);margin:16px 0">
                What Changes <span class="text-gradient">After AIRS</span>
            </h2>
        </div>

        <div style="display:grid;grid-template-columns:1fr 80px 1fr;gap:0;
                    border-radius:20px;overflow:hidden;
                    border:1px solid rgba(255,255,255,0.08)" class="reveal">

            {{-- BEFORE --}}
            <div style="background:rgba(30,58,138,0.15)">
                <div style="background:linear-gradient(135deg,#1e3a8a,#2563eb);
                            padding:18px 28px;display:flex;align-items:center;gap:12px">
                    <span style="font-size:1.3rem">😓</span>
                    <span style="font-family:var(--font-display);font-weight:800;
                                 color:#fff;font-size:1rem">Before AIRS</span>
                </div>
                <div style="padding:28px">
                    @foreach([
                    'Struggle to Explain Projects',
                    'AI Without Structure',
                    'Scattered Preparation',
                    'Lack Confidence in Interviews',
                    'No Industry Connections',
                    'Unclear Career Path',
                    ] as $item)
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px">
                        <div style="width:22px;height:22px;border-radius:50%;flex-shrink:0;
                                    background:rgba(49, 36, 167, 0.42);border:1px solid rgba(49, 36, 167, 0.4);
                                    display:flex;align-items:center;justify-content:center;
                                    font-size:0.72rem;font-weight:700;color:#3124a7">✗</div>
                        <span style="color:var(--black);font-size:0.9rem">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- DIVIDER --}}
            <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;
                        background:var(--navy);
                        border-left:1px solid rgba(255,107,53,0.2);border-right:1px solid rgba(255,107,53,0.2);
                        gap:10px">
                <div style="font-size:1.6rem;color:var(--white);font-weight:900">→</div>
                <div style="font-size:0.6rem;font-weight:900;color:var(--orange);
                            letter-spacing:2px;writing-mode:vertical-rl;text-orientation:mixed">AIRS</div>
            </div>

            {{-- AFTER --}}
            <div style="background:rgba(6,78,59,0.15)">
                <div style="background:linear-gradient(135deg,var(--orange),#ff9a5c);
                            padding:18px 28px;display:flex;align-items:center;gap:12px">
                    <span style="font-size:1.3rem">🚀</span>
                    <span style="font-family:var(--font-display);font-weight:800;
                                 color:#fff;font-size:1rem">After AIRS</span>
                </div>
                <div style="padding:28px">
                    @foreach([
                    'Explain Projects End-to-End',
                    'AI, Structured & Effective',
                    'Clear Preparation Strategy',
                    'Industry-Ready Mindset',
                    'Real Industry Network',
                    'Defined Career Roadmap',
                    ] as $item)
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px">
                        <div style="width:22px;height:22px;border-radius:50%;flex-shrink:0;
                                    background:rgba(49, 36, 167, 0.42);border:1px solid rgba(49, 36, 167, 0.4);
                                    display:flex;align-items:center;justify-content:center;
                                    font-size:0.72rem;font-weight:700;color:#3124a7">✓</div>
                        <span style="color:var(--black);font-size:0.9rem">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════ HOW AIRS OPERATES ═══════════ --}}
<section style=" padding:60px 0;background:var(--white)">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">How It Works</span>
            <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.4rem);
                       font-weight:900;color:var(--navy);margin:16px 0">
                How AIRS <span class="text-gradient">Operates</span>
            </h2>
            <p style="color:var(--black);max-width:440px;margin:0 auto">
                Engaging students directly through multiple touchpoints
            </p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px">
            @foreach([
            ['🎓','College Sessions','Direct on-campus sessions bringing industry insight to your
            classroom.','rgba(37,99,235,0.1)','rgba(37,99,235,0.3)'],
            ['🛠','Workshops','Hands-on skill workshops designed around real industry
            requirements.','rgba(255,107,53,0.1)','rgba(255,107,53,0.3)'],
            ['🎤','Interactive Events','Panel discussions, hackathons, and networking events with
            professionals.','rgba(108,99,255,0.1)','rgba(108,99,255,0.3)'],
            ['💻','Online Platform','Coming soon — dedicated platform for structured learning and
            mentorship.','rgba(86,204,242,0.1)','rgba(86,204,242,0.3)'],
            ['🤝','Mentorship Program','1:1 mentorship from working professionals across top
            companies.','rgba(34,197,94,0.1)','rgba(34,197,94,0.3)'],
            ['📜','Certification','Industry-recognized certificates to validate your skills and
            learning.','rgba(245,158,11,0.1)','rgba(245,158,11,0.3)'],
            ] as $i => [$icon,$title,$desc,$bg,$border])
            <div class="reveal" style="background:var(--navy-light);border:1px solid {{ $border }};
                        border-radius:20px;padding:32px 26px;
                        transition:all 0.3s;cursor:default" onmouseover="this.style.transform='translateY(-5px)'"
                onmouseout="this.style.transform=''">
                <div style="font-size:2.5rem;margin-bottom:18px">{{ $icon }}</div>
                <h4 style="font-family:var(--font-display);font-weight:800;
                           color:var(--white);font-size:1rem;margin-bottom:10px">{{ $title }}</h4>
                <p style="color:var(--white);font-size:0.84rem;line-height:1.7">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════ FELLOWSHIP ═══════════ --}}
<section style="padding:60px 0;background:var(--white)" id="fellowship">
    <div class="container">
        <div style="text-align:center;margin-bottom:60px" class="reveal">
            <span class="section-tag">Fellowship Program</span>
            <h2 style="font-family:var(--font-display);font-size:clamp(1.8rem,3vw,2.4rem);
                       font-weight:900;color:var(--navy);margin:16px 0">
                Apply for the <span class="text-gradient">AIRS Fellowship</span>
            </h2>
            <p style="color:var(--black);max-width:580px;margin:0 auto;line-height:1.75">
                A selective program for high-potential students — with dedicated mentorship,
                real project assignments, and a direct pathway to Accrosian internships.
            </p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;
                    max-width:900px;margin:0 auto 48px" class="reveal">
            @foreach([
            ['🎯','Dedicated Mentor','1:1 with a senior professional','rgba(255,107,53,0.12)','rgba(255,107,53,0.35)'],
            ['💼','Real Projects','Work on actual client work','rgba(108,99,255,0.12)','rgba(108,99,255,0.35)'],
            ['📜','Certificate','AIRS Fellowship certified','rgba(34,197,94,0.12)','rgba(34,197,94,0.35)'],
            ['🚀','Fast-Track','Priority Accrosian internship','rgba(86,204,242,0.12)','rgba(86,204,242,0.35)'],
            ] as [$icon,$title,$desc,$bg,$border])
            <div style="background:var(--navy-light);border:1px solid {{ $border }};
                        border-radius:18px;padding:28px 20px;text-align:center;
                        transition:all 0.3s" onmouseover="this.style.transform='translateY(-5px)'"
                onmouseout="this.style.transform=''">
                <div style="font-size:2.2rem;margin-bottom:14px">{{ $icon }}</div>
                <div style="font-weight:800;color:var(--white);font-size:0.92rem;margin-bottom:6px">{{ $title }}</div>
                <div style="color:var(--white);font-size:0.8rem;line-height:1.5">{{ $desc }}</div>
            </div>
            @endforeach
        </div>

        <div style="text-align:center" class="reveal">
            <a href="{{ route('student.register') }}" style="display:inline-flex;align-items:center;gap:12px;
                      background:var(--orange);color:#fff;padding:16px 52px;
                      border-radius:14px;font-weight:800;font-size:1.05rem;
                      text-decoration:none;transition:all 0.3s;
                      box-shadow:0 10px 40px rgba(255,107,53,0.4)"
                onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 16px 50px rgba(255,107,53,0.5)'"
                onmouseout="this.style.transform='';this.style.boxShadow='0 10px 40px rgba(255,107,53,0.4)'">
                🎯 Apply for Fellowship →
            </a>
            <p style="color:var(--black);font-size:0.82rem;margin-top:14px">
                Limited seats — Applications reviewed on rolling basis
            </p>
        </div>
    </div>
</section>

{{-- ═══════════ FINAL CTA ═══════════ --}}
<section class="cta-section">
    <div class="container cta-inner">
        <span class="section-tag" style="margin-bottom:20px">Ready to Transform?</span>
        <h2 class="cta-title">
            Don't Wait for Opportunity —
            <span class="text-gradient">Build Your Bridge</span>
        </h2>
        <p class="cta-subtitle">
            Join thousands of students already preparing the right way with AIRS.
        </p>
        <div class="cta-actions">
            <a href="{{ route('student.register') }}" class="btn btn-primary btn-arrow">
                🚀 Join AIRS Now
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline">Contact Us</a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
@keyframes airsPulse {

    0%,
    100% {
        opacity: 1;
        transform: scale(1);
    }

    50% {
        opacity: 0.5;
        transform: scale(1.4);
    }
}

@keyframes airsOrb1 {

    0%,
    100% {
        transform: translate(0, 0) scale(1);
    }

    50% {
        transform: translate(30px, 20px) scale(1.05);
    }
}

@keyframes airsOrb2 {

    0%,
    100% {
        transform: translate(0, 0) scale(1);
    }

    50% {
        transform: translate(-20px, -30px) scale(1.08);
    }
}

@keyframes airsFloat1 {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-10px);
    }
}

@keyframes airsFloat2 {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-10px);
    }
}

/* Responsive */
@media (max-width: 1024px) {
    div[style*="grid-template-columns:repeat(4,1fr)"] {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}

@media (max-width: 768px) {
    div[style*="grid-template-columns:1fr 1fr"] {
        grid-template-columns: 1fr !important;
    }

    div[style*="grid-template-columns:1fr 80px 1fr"] {
        grid-template-columns: 1fr !important;
    }

    div[style*="grid-template-columns:repeat(3,1fr)"] {
        grid-template-columns: 1fr 1fr !important;
    }

    div[style*="grid-template-columns:repeat(4,1fr)"] {
        grid-template-columns: 1fr 1fr !important;
    }
}

@media (max-width: 480px) {

    div[style*="grid-template-columns:repeat(3,1fr)"],
    div[style*="grid-template-columns:repeat(4,1fr)"],
    div[style*="grid-template-columns:repeat(2,1fr)"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush