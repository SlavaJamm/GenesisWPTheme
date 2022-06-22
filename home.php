<?php
/**
 * The home page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header()
?>

<div class="front-page">
    <div class="section-one">
        <div class="mobile-only rocket-on-bg"></div>
        <div class="menu-wrapper">
            <div class="container">
                <div class="row header-menu">
                    <div class="col-5 col-md-4 logo">
                        <a href="/">
                            <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/04/cropped-e.png" alt="">
                        </a>
                    </div>
                    <div class="col-5 mobile-only apply-mobile">
                        <div class="link apply-now">
                            <a href="https://genesis-startup-academy.com/enroll-in-startup-academy">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-md-8 links">
                        <div class="link">
                            <a href="https://genesis-startup-academy.com#about">ABOUT</a>
                        </div>
                        <div class="link">
                            <a href="https://genesis-startup-academy.com#enroll">WHY ENROLL IN</a>
                        </div>
                        <div class="link">
                            <a href="https://genesis-startup-academy.com#partners">Partners</a>
                        </div>
                        <div class="link">
                            <a href="https://genesis-startup-academy.com#program">PROGRAM</a>
                        </div>
                        <div class="link">
                            <a href="https://genesis-startup-academy.com#faq">FAQ</a>
                        </div>
                        <div class="link apply-now desktop-only">
                            <a href="https://genesis-startup-academy.com/enroll-in-startup-academy">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-2 mobile-only">
                        <div id="menuToggle">
                            <input type="checkbox" />
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="title-wrap">
                <h1>StartUp Academy 2.0</h1>
                <p class="after-title-text">Together with <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/Meta_white.svg" alt=""></p>

                <p class="sub-title-text">Learn how to grow and scale a successful tech business and hit your stride</p>

                <div class="buttons-call-to-action">
                    <div class="link apply-now">
                        <a href="https://genesis-startup-academy.com/enroll-in-startup-academy">Apply Now</a>
                    </div>

                    <div class="link program reversed">
                        <a href="#program">Program</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="about" class="section-one-continue">
        <div class="container">
            <div class="row">
                <div class="col-8 top-text desktop-only fp-pd">
                    <p><strong>Free two-month online program</strong> on how to build, operate, and scale profitable tech businesses taught by the founders of international tech companies</p>
                </div>
                <div class="col-md-4 top-text-date">
                    <p>Start:<strong> July 26</strong> </p>
                    <span class="mobile-only"><svg width="1" height="15" viewBox="0 0 1 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="1" height="15" rx="0.5" fill="#222222"/>
                    </svg>
                    </span>
                    <p>Duration: <strong>2 months</strong></p>
                </div>

                <div class="col-md-12 top-text mobile-only">
                    <p><strong>Free two-month online program</strong> on how to build, operate, and scale profitable tech businesses taught by the founders of international tech companies</p>
                </div>

                <div class="col-12 join-header">
                <strong>Join if you are:</strong> 
                </div>

                <div class="col-md-6">
                    <div class="join-cart first">
                        <h3>Founder</h3>
                        <p> Discover what it takes to start and scale up a company as told by world-renowned experts</p>
                        <div class="visual"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="join-cart second">
                        <h3>C-level executive</h3>
                        <p>Learn about the building blocks of tech startups and get step-by-step business tactics</p>
                        <div class="visual"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- why enroll -->
    <div id="enroll" class="section-two">
        <h2>Why enroll in StartUp Academy?</h2>
        <div class="container">
           
            <div class="row slider-only-for-phone">
                <div class="col-md-4 item Speakers">
                    <div class="icon"></div>
                    <h3>Speakers</h3>
                    <p>Find out how to build profitable tech businesses and stay ahead of the curve from the founders of global tech companies</p>
                </div>
                <div class="col-md-4 item Program">
                    <div class="icon"></div>
                    <h3>Program</h3>
                    <p>Refine your product by learning from the deep-dive lectures, practicing with real-world cases, and discovering the "secret sauce" to your startup success</p>
                </div>
                <div class="col-md-4 item Investment">
                    <div class="icon"></div>
                    <h3>Investment</h3>
                    <p>Win a chance to raise venture capital for building and scaling your startup by becoming the best presenter during the Pitch Day at the end of the program</p>
                </div>
                <div class="col-md-4 item Support">
                    <div class="icon"></div>
                    <h3>Support</h3>
                    <p>Use from $10 to $100K of AWS credits for your product development, connect with the key partners for individual sessions followed by actionable advice</p>
                </div>
                <div class="col-md-4 item Community">
                    <div class="icon"></div>
                    <h3>Community</h3>
                    <p>Join an international community of startup-minded entrepreneurs with great ambition and impressive track record, able to support and inspire others</p>
                </div>
                <div class="col-md-4 item Development">
                    <div class="icon"></div>
                    <h3>Development</h3>
                    <p>Explore different stages of launching and scaling a tech startup, improve your soft and hard skills and discover new business horizons</p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- section-three -->
    <div id="transform" class="section-three">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <h1>Transform the future of your business</h1>
                    <div class="buttons-call-to-action">
                        <div class="link apply-now">
                            <a href="https://genesis-startup-academy.com/enroll-in-startup-academy">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- section-four -->
     <div id="partners" class="section-four">
        <div class="container">
            <div class="row partners">
                <div class="col-6 col-md-3 Organizers">Organizers</div>
                <div class="col-6 col-md-3 read-more">
                <div class="buttons-call-to-action">

                        <div class="link program reversed">
                            <a href="https://genesis-startup-academy.com/organizers/">
                                Read More 
                                    <svg width="43" height="8" viewBox="0 0 43 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M42.8536 4.35355C43.0488 4.15829 43.0488 3.84171 42.8536 3.64645L39.6716 0.464466C39.4763 0.269204 39.1597 0.269204 38.9645 0.464466C38.7692 0.659728 38.7692 0.976311 38.9645 1.17157L41.7929 4L38.9645 6.82843C38.7692 7.02369 38.7692 7.34027 38.9645 7.53553C39.1597 7.7308 39.4763 7.7308 39.6716 7.53553L42.8536 4.35355ZM0 4.5H42.5V3.5H0V4.5Z" fill="black"/>
                                    </svg>
                            </a>
                        </div>
                    </div>    
                </div>
                <div class="col-6 Technology desktop-only">Technology Partner</div>

                
                <div class="col-6 col-md-3">
                    <div class="partner p-genesis">
                        <a href="https://www.gen.tech/">
                            <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/genesis-logo.svg" alt=""> -->
                            <div class="img-partner-link"></div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="partner p-meta">
                        <a href="https://about.facebook.com/meta/">
                            <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/Meta_Black.svg" alt=""> -->
                            <div class="img-partner-link"></div>
                        </a>
                    </div>
                </div>

                
                <div class="col-md-6 Technology mobile-only">Technology Partner</div>

                <div class="col-md-6">
                    <div class="partner p-aws">
                        <a href="https://aws.amazon.com/">    
                            <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/aws.svg" alt=""> -->
                            <div class="img-partner-link"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 Partners mt-50">General Partners</div>
                <div class="col-6 col-md-4"><div class="partner">
                    <a href="https://www.flyerone.vc/">     
                        <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/Asset-1.svg" alt=""> -->
                        <div class="img-partner-link flyerone"></div>
                </a></div></div>
                <div class="col-6 col-md-4"><div class="partner">
                    <a href="https://horizoncapital.com.ua/">
                        <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/horizon-capital-2.svg" alt=""> -->
                        <div class="img-partner-link horizoncapital"></div>
                    </a>
                </div></div>
                <div class="col-md-4">
                    <div class="partner appsfl">
                        <a href="https://www.appsflyer.com/">
                            <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/apps-flyer.svg" alt=""> -->
                        <div class="img-partner-link appsflyer"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-12 Partners mt-50">Partners</div>
                <div class="col-6 col-md-3">
                    <div class="partner">
                            <a href="https://www.awesomic.io/">     
                                <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/Asset-1.svg" alt=""> -->
                                <div class="img-partner-link awesomic"></div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3"><div class="partner">
                    <a href="https://legalnodes.com">
                        <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/horizon-capital-2.svg" alt=""> -->
                        <div class="img-partner-link legalnodes"></div>
                    </a>
                </div></div>
                <div class="col-6 col-md-3"><div class="partner">
                    <a href="https://www.notion.so/product?utm_source=google&utm_campaign=2075789713&utm_medium=80211061801&utm_content=453572180157&utm_term=notion&targetid=kwd-312974742&gclid=CjwKCAjw14uVBhBEEiwAaufYxxuVdWI1KaR10ZaHYloCWhsjgw0Y1H0ktv_pcSdo4ZMTpjmwOX0M9RoC2VIQAvD_BwE">
                        <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/horizon-capital-2.svg" alt=""> -->
                        <div class="img-partner-link notion"></div>
                    </a>
                </div></div>
                <div class="col-6 col-md-3">
                    <div class="partner appsfl">
                        <a href="https://www.zendesk.com/">
                            <!-- <img src="https://genesis-startup-academy.com/wp-content/uploads/2022/05/apps-flyer.svg" alt=""> -->
                        <div class="img-partner-link zendesk"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section-five  -->
    <div id="program" class="section-five">
        <h2>PROGRAM</h2>
        <p>Discover best practices and learn how to grow your business in the e-commerce, edtech, media, and mobile app industry</p>
        <div class="container">


            <!-- slider for mobile only  -->
            <div class="row slider-only-for-phone">
                <div class="col-6">
                    <div class="program one">
                        <div class="program-icon"></div>
                        <h3>Business Models</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                In and outs of startup life and growing a successful business
                            </li>
                            <li><div class="count">02</div>The fundamentals for the growth of startups and the key criteria for successful business development</li>
                            <li><div class="count">03</div>Avoiding scaling an unprofitable business: intro to unit-economics</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program two">
                    <div class="program-icon"></div>
                        <h3>Strategy</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Blueprints for crafting a successful startup launching strategy
                            </li>
                            <li>
                                <div class="count">02</div>
                                Hands-on experience in conducting effectual market research
                            </li>
                            <li><div class="count">03</div>Building a team that won’t sink your business</li>
                            <li><div class="count">04</div>Pivoting a business</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program three">
                    <div class="program-icon"></div>
                        <h3>Management</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Stages of company development
                            </li>
                            <li>
                                <div class="count">02</div>
                                Successful operation of different teams: management principles
                            </li>
                            <li><div class="count">03</div>Building effective teams while scaling your business</li>
                            <li><div class="count">04</div>Product management</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program four">
                        <div class="program-icon"></div>
                        <h3>Analysis</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Expertise in analytics which drives critical business decisions and craft successful strategies
                            </li>
                            <li><div class="count">02</div>Building an analytics team</li>
                            <li><div class="count">03</div>Product analysis in a nutshell</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program five">
                        <div class="program-icon"></div>
                        <h3>Marketing</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Designing a digital marketing action plan lined up with the business goals
                            </li>
                            <li><div class="count">02</div>Choosing the right platforms and tools to meet the business goals</li>
                            <li><div class="count">03</div>Reach more customers, build better products and run your business more efficiently with the Facebook tools by The Meta Blueprint Team</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program six">
                        <div class="program-icon"></div>
                        <h3>Finance & Investments</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Advice on attracting investors and getting funds
                            </li>
                            <li><div class="count">02</div>Cases and key steps to securing investments for business</li>
                            <li><div class="count">03</div>Due diligence for a startup </li>
                            <li><div class="count">04</div>Payments in your product </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program seven">
                        <div class="program-icon"></div>
                        <h3>Innovation & Partnership</h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Boosting business with the help of Creators
                            </li>
                            <li><div class="count">02</div>Creating steps to develop confidence in the negotiation process</li>
                            <li><div class="count">03</div>Negotiation tactics and frameworks based on everyday situations in business and life</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6">
                    <div class="program eight">
                        <div class="program-icon"></div>
                        <h3>Team and people management </h3>
                        <ul>
                            <li>
                                <div class="count">01</div>
                                Critical issues for the labor market
                            </li>
                            <li><div class="count">02</div>Useful strategies for recruiting talents in a tight labor market</li>
                            <li><div class="count">03</div>Growing effective teams</li>
                        </ul>
                    </div>
                </div>
                                
            </div>
        </div>
    </div>

    <!-- section-six  -->
    <div class="section-six">
        <h2>StartUp Academy: final step</h2>
        <div class="container for-section-six">
            <div class="pitch-day-img">
                
            </div>
            <div class="pitch-day">
                <div class="section-six-icon section-six-icon-first"></div>
                <h3>Pitch Day</h3>
                <p>At the end of the program, all participants <strong>will have the opportunity to pitch their startups to venture capital funds.</strong> We look forward to powerful and profound work based on the knowledge gained during the Startup Academy 2.0.</p>
                <p>However, we cannot guarantee that your startup will receive funding. Nevertheless, being capable of making the investors truly fall in love with your product, you will get the chance to raise money and scale your business.</p>
            </div>
        </div>    

        <div class="container for-section-six with-meta">
            <div class="meta-certification-img">
                
            </div>
            <div class="meta-certification">
                <div class="section-six-icon section-six-icon-second"></div>
                <h3>Meta Blueprint Certification</h3>
                <p>Meta Certification is the highest level of accreditation that Meta provides and recognizes. Meta Certification helps people distinguish themselves as highly credible in their knowledge of Meta products and services.</p>

                <div class="buttons-call-to-action">

                    <div class="link program reversed">
                        <a href="https://www.facebook.com/business/learn/certification/exams/100-101-exam">
                            Read More 
                                <svg width="43" height="8" viewBox="0 0 43 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.8536 4.35355C43.0488 4.15829 43.0488 3.84171 42.8536 3.64645L39.6716 0.464466C39.4763 0.269204 39.1597 0.269204 38.9645 0.464466C38.7692 0.659728 38.7692 0.976311 38.9645 1.17157L41.7929 4L38.9645 6.82843C38.7692 7.02369 38.7692 7.34027 38.9645 7.53553C39.1597 7.7308 39.4763 7.7308 39.6716 7.53553L42.8536 4.35355ZM0 4.5H42.5V3.5H0V4.5Z" fill="black"/>
                                </svg>
                        </a>
                    </div>
                </div>   
            </div>    
        </div>  

        <div class="container for-section-six with-aws">
            <div class="journey-reviews-img">
                
            </div>
            <div class="journey-reviews">
                <div class="section-six-icon section-six-icon-third"></div>
                <h3>Startup journey reviews with AWS</h3>
                <p>Amazon Web Services (AWS) is the world’s most comprehensive and broadly adopted cloud platform, offering over 200 fully featured services from data centers globally.
                <p>Explore all the ways that AWS can support startups, being the participant of the Academy. <strong> Learn how to grow and scale your startup, including planning your journey to receive additional AWS support even up to $100K activate credits,</strong> AWS Marketplace, free trainings and one-on-one AWS experts sessions.</p>
            </div>
        </div> 
    </div>

    
    <!-- section-seven  -->
    <div class="section-seven">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1">
                    <h2>Connect with the best experts from around the world</h2>
                </div>
            </div>
            <div class="row slider-only-for-phone-two-slides slider-four-slides">
                <div class="col-3 human">
                    <div class="avatar one"></div>
                    <h3 class="name">Volodymyr Mnogoletniyi</h3>
                    <div class="position">CEO Genesis</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar two"></div>
                    <h3 class="name">Oleksii Bessonov</h3>
                    <div class="position">Group Director, CEE Disruptors, Meta</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar three"></div>
                    <h3 class="name">Anna Khoma</h3>
                    <div class="position">CMO, OBRIO, Genesis</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar four"></div>
                    <h3 class="name">Vasilii Tofan</h3>
                    <div class="position">Partner at Horizon Capital</div>
                </div>

                <div class="col-3 human">
                    <div class="avatar five"></div>
                    <h3 class="name">Stanislav Birov</h3>
                    <div class="position">Client Partner, CEE, Meta</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar six"></div>
                    <h3 class="name">Maksym Shtepa</h3>
                    <div class="position">CEO SocialTech</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar seven"></div>
                    <h3 class="name">Artem Kopanev</h3>
                    <div class="position">COO Genesis</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar eight"></div>
                    <h3 class="name">Vital Laptenok</h3>
                    <div class="position">CEO Flyer One Ventures</div>
                </div>

                <div class="col-3 human">
                    <div class="avatar nine"></div>
                    <h3 class="name">Oleksii Yermolenko</h3>
                    <div class="position">Vice President Flyer One Ventures</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar ten"></div>
                    <h3 class="name">Oleksii Shevchenko</h3>
                    <div class="position">CPO appflame</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar eleven"></div>
                    <h3 class="name">Yuriy Alekseev</h3>
                    <div class="position">CEO SolidGate</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar twelve"></div>
                    <h3 class="name">Julia Onuchina</h3>
                    <div class="position">Manager, Global Business Group, Meta</div>
                </div>

                <div class="col-3 human">
                    <div class="avatar thirteen"></div>
                    <h3 class="name">Georgiy Fomichev</h3>
                    <div class="position">CEO Plich</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar fourteen"></div>
                    <h3 class="name">Olena Mazhuha</h3>
                    <div class="position">Investment Director, Flyer One Ventures</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar fiveteen"></div>
                    <h3 class="name">Serhii Bohoslovskyi</h3>
                    <div class="position">СЕO Evercon, R&D Officer, Genesis</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar sixteen"></div>
                    <h3 class="name">Oleksandr Matsiuk</h3>
                    <div class="position">Head of Growth, SocialTech</div>
                </div>
                
                <div class="offset-md-3 col-3 human">
                    <div class="avatar seventeen"></div>
                    <h3 class="name">Bogdan Govorun</h3>
                    <div class="position">Head of Growth, Genesis</div>
                </div>
                <div class="col-3 human">
                    <div class="avatar eighteen"></div>
                    <h3 class="name">Igor Zinatulin</h3>
                    <div class="position">Business Education Partner, CEE, MENA, Meta</div>
                </div>
            </div>
        </div>

        <div id="timeline" class="timeline">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>TIMELINE</h2>
                        <div class="timeline-preview-wrap">
                            <div class="timeline-preview-icons">

                            </div>
                            <div class="timeline-preview">

                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

    </div>

    
    <!-- section-eight  -->
    <div id="standWithUkraine" class="section-eight">
        <div class="container for-section-eight with-ua">
            <div class="ua-img"></div>
            <div class="ua">
                <p>We want to support Ukrainian startups, founders, and their teams. Therefore, we provide a special quota for them by <strong>allocating 15% of all seats in the Academy to Ukrainian startups only.</strong></p>

                <p class="join-us">Join us and develop your business!</p>

                <div class="buttons-call-to-action">

                    <div class="link apply-now">
                        <a href="https://genesis-startup-academy.com/enroll-in-startup-academy">Apply Now</a>
                    </div>
                </div>   
            </div>

            <div class="stand-with-ua-img"></div>
        </div>    
    </div>  


    <!-- section-nine  -->
    <div id="reviews" class="section-nine">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Results & Reviews</h2>
                    <p class="sub-title">Together with Meta, Genesis successfully organized the first <strong>Startup Academy in 2021</strong> and united startup-minded entrepreneurs worldwide</p>
                </div>

                <div class="col-md-4 nine-with-badges">
                    <div class="top-review-badge">
                         9,5/10
                    </div>
                    <div class="review-badge">
                        <p>Satisfaction rate</p>
                    </div>
                </div>
                <div class="col-md-4 nine-with-badges">
                    <div class="top-review-badge">
                        35 founders
                    </div>
                    <div class="review-badge">
                        <p>from 7 countries</p>
                    </div>
                </div>
                <div class="col-md-4 nine-with-badges">
                    <div class="top-review-badge">
                        9M+
                    </div>
                    <div class="review-badge">
                        <p>coverage of <br> the project</p>
                    </div>
                </div>

                <div class="col-12 slider-review">
                    <div class="single-review">
                        <div class="review-body one">
                            <p>
                            “I attended the lecture of Genesis co-founder Vladimir Mnogoletny which opened up a lot of key ideas for me. After the lecture, I realized that I did not have a focus on quality hiring. My company's stage does not meet the team requirements for further growth and scaling. As CEO I'm not doing my job right. Therefore, my efforts now are aimed at improving the team.”
                            </p>
                            <div class="review-body-info">
                                <div class="avatar"></div>
                                <div class="name">Shyngys Bolatbekov</div>
                                <div class="position">Co-founder INTERSOL & CYBERFOX, CEO CYBERFOX</div>
                            </div>
                        </div>
                        <div class="review-body two">
                            <p>
                            “My team had a question: "How to test your idea and business model with minimal resources and without a finished product?". <br>
                            Lectures about unit economics and Internet marketing, as well as practical advice from Meta lecturers, helped me find the answer. As a result of the experiment, we determined the basic model of the unit economics and top-level metrics, adjusted the business model and the direction of product development, confirmed the value hypothesis and collected the base of the first users.”
                            </p>
                            <div class="review-body-info">
                                <div class="avatar"></div>
                                <div class="name">Oleksandr Korzhenko</div>
                                <div class="position">Co-founder INTERSOL & CYBERFOX, CEO CYBERFOX</div>
                            </div>
                        </div>
                        <div class="review-body three">
                            <p>
                            “The lectures on analytics were especially helpful to me. The work of analysts permeates almost all areas of the company: product, marketing and finance. And it also influences business decision-making. The lecturers talked about the basics of analytics and its types, differences in task setting, examples of organizational structure, features of hiring and interaction with other team members. And the analysis of real tasks and achieved results helped to visualize Getpin's future steps in this direction.”
                            </p>
                            <div class="review-body-info">
                                <div class="avatar"></div>
                                <div class="name">Volodymyr Leshchenko</div>
                                <div class="position">Founder Getpin</div>
                            </div>
                        </div>
                        <div class="review-body four">
                            <p>
                            “I got the insight at one of the lectures on marketing which goes: “Do what no one has done before you. At least in your niche." I  have realized that I need to experiment with creatives and convey the value of the product through them.
                            Now the topic of brand strategy and long-term marketing is of great interest to me, so we will launch the first tests.”
                            </p>
                            <div class="review-body-info">
                                <div class="avatar"></div>
                                <div class="name">Maria Batrin</div>
                                <div class="position">Co-founder & Product Manager, Bloomy Lab</div>
                            </div>
                        </div>
                        <div class="review-body five">
                            <p>
                            “The key thesis from the StartUp Academy is “The main business battle in the coming years is the battle for talent.”
                            As a CEO, I am planning to get involved in networking and form a circle of cool guys in my niches in the near future. This will help class A-players quickly close positions as the business scales. The point where the company will be in five years really depends on who we hire in the coming months.”
                            </p>
                                <div class="review-body-info">
                                <div class="avatar"></div>
                                <div class="name">Maksym Sundalov</div>
                                <div class="position">CEO EnglishDom</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </div>  

    <!-- section-ten  -->
    <div id="faq" class="section-ten">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Frequently asked questions</h2>
                    <p class="sub-title">If you have any questions, please <a href="mailto:startup-academy@gen.tech">contact us</a></p>

                    <div class="faq-container">
                        <div id="accordion">
                            <h3>
                                1. How to join the StartUp Academy? 
                                <div class="icon-o-c">

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>Fill out the application form by July 1.
                                </p>
                            </div>
                            <h3>2. Why do I have to go through the selection process?

                            
                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>The idea of the StartUp Academy is to provide the most efficient learning experience and enable a personalized connection between each participant and speaker. That is why we have to form a group with a limited number of participants.
                                </p>
                            </div>
                            <h3>3. What are the entry requirements?

                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>The program is designed for founders and C-level executives with MVP of their tech startup in any domain (e-commerce, edtech, fintech, media, mobile app industry, travel and mobility, etc.).
                                </p>
                            </div>
                            <h3>4. Is participation free?
                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>Yes, participation is free of charge.
                                </p>
                            </div>
                            <h3>5. Can I raise investment for my startup at Pitch Day? 

                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>At the end of the program, all participants will have the opportunity to pitch their startups to venture capital funds. We look forward to powerful and profound work based on the knowledge gained during the Startup Academy 2.0. However, we cannot guarantee that your startup will receive funding. Nevertheless, being capable of making the investors truly fall in love with your product, you will get the chance to raise money and scale your business.

                                </p>
                            </div>
                            <h3>6. Do I have any opportunities from partners?

                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>Yes, you can get from $10 to $100K of AWS credits. <br><br>

                                Meta Certification is the highest level of accreditation that Meta provides and recognizes. Meta Certification helps people distinguish themselves as highly credible in their knowledge of Meta products and services.

                                </p>
                            </div>
                            <h3>7. How is the learning process organized?

                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>Participants will join online live lectures and discussions.
                                </p>
                            </div>
                            <h3>8. What will be the working language?

                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p> English is the working language.
                                </p>
                            </div>
                            <h3>9. What is the program structure?

                            <div class="icon-o-c">
                                    
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29.5px"
                                        height="29.5px" viewBox="0 0 29.5 29.5" style="enable-background:new 0 0 29.5 29.5;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#040404;stroke-width:2;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <path class="st0" d="M15,0v29.5"/>
                                    <path class="st0" d="M0,14.8h29.5"/>
                                    </svg>

                                </div>
                            </h3>
                            <div>
                                <p>The StartUp Academy program consists of approximately 45+ hours of material delivered over two months. Participants will join online live lectures and discussions. The program will cover different stages of launching and scaling a tech startup. 
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>    
        </div>    
    </div>  

    <!-- section-footer  -->
    <div class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><a href="/">StartUp Academy 2.0</a></h3>
                    <p>Learn how to grow and scale a successful tech business and hit your stride</p>
                </div>
                <div class="col-md-4">
                    <h3>Menu</h3>
                    <div class="menu-links">
                        <a href="/#about">About the Academy</a>
                        <a href="/#enroll">Why join </a>
                        <a href="/#program">Program</a>
                        <a href="/#timeline">Timeline</a>
                        <a href="/#partners">Organizers & Partners</a>
                        <a href="/#standWithUkraine">#StandWithUkraine</a>
                        <a href="/#reviews">Results & Reviews</a>
                        <a href="/#faq">FAQ</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contacts</h3>
                        <div class="soc-links">
                        <a class="mail" href="mailto:startup-academy@gen.tech">startup-academy@gen.tech</a>
                        <a href="http://facebook.com/GenesisStartUpAcademy">Facebook</a>
                        <a href="http://instagram.com/genesis_startup_academy/">Instagram</a>
                    </div>
                </div>
            </div>    
        </div>    
    </div>  


</div>

<?php
get_footer();
?>
