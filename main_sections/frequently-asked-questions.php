<div class="faq-sec px-6 lg:px-8 pt-14 md:pt-24 lg:pt-[10.5rem] max-w-7xl mx-auto pb-1.5">
                                <div class="lg:overflow-hidden">
                                    <h2 class="font-bold sentence-first-letter text-4xl xl:text-5xl 2xl:text-6xl tracking-[-2px] lg:-translate-y-[7px] xl:!leading-[55px] 2xl:!leading-[65px]"><span><span class="!normal-case">FAQs</span> about android app development.</span></h2>
                                </div>
                                <div class="space-y-6 lg:space-y-10 overflow-hidden pt-10 lg:pt-16">
                                    <div class="pt-2" data-headlessui-state=""><button class="flex w-full justify-between text-left pb-1" id="headlessui-disclosure-button-:R17p9:" type="button" aria-expanded="false" data-headlessui-state="">
                                            <h3 class="undefined font-bold text-2xl xl:text-3xl 2xl:text-4xl tracking-[0px]">How long does it take to develop an Android app?</h3><span class="ml-6 flex h-7 items-center"><span class="transform transition-transform duration-300 ease-in-out text-5xl font-normal mt-[8px]">+</span></span>
                                        </button></div>
                                    
                                </div>
                            </div>
                            <div class="faq-sec px-6 lg:px-8 pt-14 md:pt-24 lg:pt-[10.5rem] max-w-7xl mx-auto pb-1.5">
    <div class="lg:overflow-hidden">
        <h2 class="font-bold sentence-first-letter text-4xl xl:text-5xl 2xl:text-6xl tracking-[-2px] lg:-translate-y-[7px] xl:!leading-[55px] 2xl:!leading-[65px]">
            <span><span class="!normal-case">FAQs</span> about android app development.</span>
        </h2>
    </div>
    <div class="space-y-6 lg:space-y-10 overflow-hidden pt-10 lg:pt-16">
        <div class="faq-item">
            <button class="faq-button flex w-full justify-between text-left pb-1" type="button" aria-expanded="false">
                <h3 class="font-bold text-2xl xl:text-3xl 2xl:text-4xl tracking-[0px]">How long does it take to develop an Android app?</h3>
                <span class="ml-6 flex h-7 items-center">
                    <span class="icon transform transition-transform duration-300 ease-in-out text-5xl font-normal mt-[8px]">+</span>
                </span>
            </button>
            <div class="faq-content hidden">
                <p>It typically takes 2-6 months to develop an Android app, depending on complexity.</p>
            </div>
        </div>
        <div class="faq-sec px-6 lg:px-8 pt-14 md:pt-24 lg:pt-[10.5rem] max-w-7xl mx-auto pb-1.5">
    <div class="lg:overflow-hidden">
        <h2 class="font-bold sentence-first-letter text-4xl xl:text-5xl 2xl:text-6xl tracking-[-2px] lg:-translate-y-[7px] xl:!leading-[55px] 2xl:!leading-[65px]">
            <span><span class="!normal-case">FAQs</span> about android app development.</span>
        </h2>
    </div>
  
        <!-- Add more FAQ items here -->
    </div>
</div>

<script>
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            const heading = button.querySelector('.faq-heading');
            const icon = button.querySelector('.icon');


            button.setAttribute('aria-expanded', !isExpanded);


            content.classList.toggle('hidden');
            content.classList.toggle('block');


            if (!isExpanded) {
                heading.style.color = '#eeb736';
                icon.style.color = '#eeb736';
                icon.textContent = '−';
            } else {
                heading.style.color = '';
                icon.style.color = '';
                icon.textContent = '+';
            }
        });
    });
</script>

<style>
    .faq-content.hidden {
        display: none;
    }
    .faq-content.block {
        display: block;
        padding-top: 1rem;
    }
</style>
