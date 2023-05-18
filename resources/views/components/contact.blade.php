<div class="p-10 md:p-20 bg-center bg-cover lg:bg-contain" style="background-image: url('BG.png')" id="contact">
    <div class="grid place-items-center gap-y-16">
        <img src="potenseeklogo.png" alt="Logo Potenseek" class="h-20 aspect-auto">


        <div class="text-2xl md:text-4xl font-bold">Pre-Register</div>

        <div class="font-bold text-xl text-center">Aplikasi ini sedang dalam tahap pengembangan, yuk bergabung dengan
            kami
            lebih awal dengan melakukan pre-register! Kamu bisa berkesempatan menjadi tester
            produk kami yang pertama! Segera daftar sekarang!</div>
        <div class="card w-3/4 border-4">
            <form class="card-body" action="/preregister" method="post">
                @csrf
                <div class="form-control w-full font-bold">
                    <label class="label ">
                        <span class="label-text text-xl">Nama Lengkap</span>
                    </label>
                    <input type="text" class="input w-full input-ghost " name="name" />
                    <label class="label">
                        <span class="label-text text-xl">Email</span>
                    </label>
                    <input type="email" class="input w-full input-ghost" name="email" />

                </div>
                <div class="card-actions flex justify-end">
                    <button
                        class="btn md:btn-xl place-self-center w-full md:w-fit h-fit text-xl md:text-2xl font-bold bg-secondary text-white"
                        type="submit">Pre-Register</button>

                </div>
            </form>
        </div>
    </div>
</div>
