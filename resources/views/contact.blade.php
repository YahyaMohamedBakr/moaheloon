<x-app-layout>
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>اتصل بنا</h2>
            <p>تواصلوا معنا لمعرفة المزيد عن خدماتنا وبدء التعاون لتحقيق أهدافكم التدريبية.</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-4">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>راسلنا</h3>
                                <p>info@moahloon.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>اتصل بنا</h3>
                                <p>+966592905717</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-chat-square-text flex-shrink-0"></i>
                            <div>
                                <h3>دعم مباشر</h3>
                                <p>فريقنا متاح للإجابة على استفساراتكم</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3>ساعات العمل</h3>
                                <p>الأحد - الخميس: 9 صباحًا - 5 مساءً</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="#" method="POST" class="php-email-form" data-aos="fade" data-aos-delay="100">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="الاسم" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="الموضوع" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="8" placeholder="الرسالة" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">جارٍ التحميل</div>
                                <div class="error-message"></div>
                                <div class="sent-message">تم إرسال رسالتك. شكرًا!</div>
                                <button type="submit">إرسال الرسالة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>