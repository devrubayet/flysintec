<div class="tracking-card bg-white w-full shadow-2xl shadow-red-100 rounded-md px-10 pb-10 pt-5">
    <div class="relative isolate">
        <p class="md:text-3xl text-lg text-red-700 font-bold mb-4">
            Retrieve Your Passport here
        </p>
        <label for="reference_number" class="font-medium text-gray-700">Reference Number</label>

        <form class="flex flex-col md:flex-row gap-4 mt-2" onsubmit="return false;" action="">
            <!-- Input -->
            <div class="input-group flex flex-col w-full md:w-5/6">
                <input class="w-full border border-red-950 bg-red-50 rounded-md px-4 py-3 outline-red-900" type="text" id="reference_number"
                    name="reference_number" placeholder="Enter Your Reference Number" />
            </div>

            <!-- Button -->
            <div class="input-group md:w-1/6">
                <input onclick="openModal()"
                    class="w-full h-full border rounded-md bg-red-600 px-3 py-2 text-white text-xl font-bold cursor-pointer hover:bg-red-900 transition"
                    type="button" value="Track" />
            </div>
        </form>
    </div>
</div>

<style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-family: "Outfit", sans-serif;
        }

        body {
            margin: 0;
            background: #fff;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        /* Utility helpers not easily expressible in CDN config */
        .font-display {
            font-family: "Dancing Script", cursive;
        }

        .text-hero {
            font-size: clamp(4.5rem, 11vw, 9rem);
        }

        .text-top-dest {
            font-size: clamp(3rem, 6vw, 5.5rem);
        }

        /* Gold arc behind hero */
        .gold-arc {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .gold-arc svg {
            position: absolute;
            top: -5%;
            right: 12%;
            width: 55%;
            height: 110%;
        }

        /* Cloud puff */
        .cloud {
            background: rgba(255, 255, 255, 0.88);
            border-radius: 9999px;
            filter: blur(3px);
        }

        /* Search bar sits at bottom of hero */
        .search-bar {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 680px;
            padding: 0 1rem;
            z-index: 20;
        }

        /* Promo banner cloud row */
        .promo-clouds {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            gap: 4px;
            pointer-events: none;
            overflow: hidden;
        }

        .promo-clouds span {
            display: block;
            width: 64px;
            height: 32px;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 9999px;
            margin-bottom: -12px;
            flex-shrink: 0;
        }

        /* Destination card hover */
        .dest-card img {
            transition: transform 0.5s;
        }

        .dest-card:hover img {
            transform: scale(1.06);
        }

        /* Tour card hover */
        .tour-card img {
            transition: transform 0.5s;
        }

        .tour-card:hover img {
            transform: scale(1.06);
        }

        /* Back-to-top */
        #back-top {
            display: none;
        }

        /* Responsive tweaks */
        @media (max-width: 640px) {
            .hero-text-wrap {
                padding-bottom: 220px;
            }
        }
    </style>