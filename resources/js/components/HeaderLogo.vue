<template>
    <div>
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Editais com inscrições abertas </h1>
        </div>
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                    <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img id="dimensao" :src="urlCapa">
                                <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                    Edital aberto
                                </div>
                            </div>
                            <div class="p-4">
                                <a class="text-width-g " href="/single/{{$post->id}}">Inscreva-se<i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <info-data />
        <info-data />
    </div>
</template>
<script>

export default {
    setup: () => ({
       
     urlCapa: 'https://mapacultural.secult.ce.gov.br/files/opportunity/4443/file/4481112/blob.-8eedc4202dfd250d60557cb4411f338a.png'
    })
}
</script>