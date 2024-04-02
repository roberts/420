@extends('layout')

@section('content')
    <main class="flex-auto">
        <div class="sm:px-8 mt-16 sm:mt-32">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">We're TaRDie and we are here to party.</h1>
                            <p class="hidden md:block mt-6 text-base text-zinc-600 dark:text-zinc-400">Are you down with the Syndrome? We ARE! $TaRDie lives on the Solana Blockchain under this contract address: <a class="text-zinc-600 dark:text-zinc-400 transition hover:text-zinc-500 dark:hover:text-zinc-300" href="https://solscan.io/token/6Wn3FEhbSkFSGuGkkx7YLKiYMnujPxJsG9VT7TU2cQc3</a></p>
                            <p class="block md:hidden mt-6 text-base text-zinc-600 dark:text-zinc-400">Are you down with the Syndrome? We ARE! $TaRDie lives on the Solana Blockchain under <a class="text-zinc-600 dark:text-zinc-400 transition hover:text-zinc-500 dark:hover:text-zinc-300" href="https://solscan.io/token/6Wn3FEhbSkFSGuGkkx7YLKiYMnujPxJsG9VT7TU2cQc3">this contract address</a>.</p>
                            <div class="mt-6 flex gap-6">
                                <a class="group -m-1 p-1" aria-label="Follow $TaRDie on X" href="https://twitter.com/TardieBarbie">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M13.3174 10.7749L19.1457 4H17.7646L12.7039 9.88256L8.66193 4H4L10.1122 12.8955L4 20H5.38119L10.7254 13.7878L14.994 20H19.656L13.3171 10.7749H13.3174ZM11.4257 12.9738L10.8064 12.0881L5.87886 5.03974H8.00029L11.9769 10.728L12.5962 11.6137L17.7652 19.0075H15.6438L11.4257 12.9742V12.9738Z"></path>
                                    </svg>
                                </a>
                                <a class="group -m-1 p-1" aria-label="Get TaRDie in our Telegram" href="https://t.me/TardieBarbie">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M 20.302734 2.984375 C 20.013769 2.996945 19.748583 3.080055 19.515625 3.171875 C 19.300407 3.256634 18.52754 3.5814726 17.296875 4.0976562 C 16.06621 4.61384 14.435476 5.2982348 12.697266 6.0292969 C 9.2208449 7.4914211 5.314238 9.1361259 3.3125 9.9785156 C 3.243759 10.007156 2.9645852 10.092621 2.65625 10.328125 C 2.3471996 10.564176 2.0039062 11.076462 2.0039062 11.636719 C 2.0039062 12.088671 2.2295201 12.548966 2.5019531 12.8125 C 2.7743861 13.076034 3.0504903 13.199244 3.28125 13.291016 L 3.28125 13.289062 C 4.0612776 13.599827 6.3906939 14.531938 6.9453125 14.753906 C 7.1420423 15.343433 7.9865895 17.867278 8.1875 18.501953 L 8.1855469 18.501953 C 8.3275588 18.951162 8.4659791 19.243913 8.6582031 19.488281 C 8.7543151 19.610465 8.8690398 19.721184 9.0097656 19.808594 C 9.0637596 19.842134 9.1235454 19.868148 9.1835938 19.892578 C 9.191962 19.896131 9.2005867 19.897012 9.2089844 19.900391 L 9.1855469 19.894531 C 9.2029579 19.901531 9.2185841 19.911859 9.2363281 19.917969 C 9.2652427 19.927926 9.2852873 19.927599 9.3242188 19.935547 C 9.4612233 19.977694 9.5979794 20.005859 9.7246094 20.005859 C 10.26822 20.005859 10.601562 19.710937 10.601562 19.710938 L 10.623047 19.695312 L 12.970703 17.708984 L 15.845703 20.369141 C 15.898217 20.443289 16.309604 21 17.261719 21 C 17.829844 21 18.279025 20.718791 18.566406 20.423828 C 18.853787 20.128866 19.032804 19.82706 19.113281 19.417969 L 19.115234 19.416016 C 19.179414 19.085834 21.931641 5.265625 21.931641 5.265625 L 21.925781 5.2890625 C 22.011441 4.9067171 22.036735 4.5369631 21.935547 4.1601562 C 21.834358 3.7833495 21.561271 3.4156252 21.232422 3.2226562 C 20.903572 3.0296874 20.591699 2.9718046 20.302734 2.984375 z M 19.908203 5.1738281 C 19.799442 5.7198576 17.33401 18.105877 17.181641 18.882812 L 13.029297 15.041016 L 10.222656 17.414062 L 11 14.375 C 11 14.375 16.362547 8.9468594 16.685547 8.6308594 C 16.945547 8.3778594 17 8.2891719 17 8.2011719 C 17 8.0841719 16.939781 8 16.800781 8 C 16.675781 8 16.506016 8.1197812 16.416016 8.1757812 C 15.272368 8.8887854 10.401283 11.664685 8.0058594 13.027344 C 7.8617016 12.96954 5.6973962 12.100458 4.53125 11.634766 C 6.6055146 10.76177 10.161156 9.2658083 13.472656 7.8730469 C 15.210571 7.142109 16.840822 6.4570977 18.070312 5.9414062 C 19.108158 5.5060977 19.649538 5.2807035 19.908203 5.1738281 z M 17.152344 19.025391 C 17.152344 19.025391 17.154297 19.025391 17.154297 19.025391 C 17.154252 19.025621 17.152444 19.03095 17.152344 19.03125 C 17.153615 19.024789 17.15139 19.03045 17.152344 19.025391 z"></path>
                                    </svg>
                                </a>
                                <a class="group -m-1 p-1" aria-label="$TaRDie on GeckoTerminal" href="https://www.geckoterminal.com/solana/pools/3cpWBnFjWB3fVcdUWt7jbNwkSsDmtwfJnL4zPXrMJBgS">
                                    <svg viewBox="0 -10 220 220" aria-hidden="true"  class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M 91.00,198.69 C80.99,195.79 78.75,193.91 43.20,158.58 C1.16,116.80 1.50,117.28 1.50,100.02 C1.50,83.00 0.87,83.90 42.38,42.38 C83.89,0.87 83.01,1.50 100.00,1.50 C113.89,1.50 118.91,3.74 130.62,15.18 C135.23,19.68 139.00,23.67 139.00,24.07 C139.00,24.46 137.50,25.06 135.68,25.40 C133.85,25.74 131.11,27.32 129.59,28.90 C127.30,31.30 125.70,31.91 120.17,32.49 C111.52,33.41 99.68,37.17 94.00,40.81 C87.22,45.14 80.23,53.26 76.80,60.78 C74.18,66.50 71.35,69.91 57.63,83.75 L 41.52,100.00 L 47.09,105.57 L 52.65,111.13 L 57.74,107.11 C64.21,102.00 68.17,94.16 71.44,80.00 C74.25,67.81 74.92,71.46 72.46,85.58 C70.71,95.60 66.88,104.04 60.77,111.35 L 56.71,116.20 L 77.60,137.10 C89.08,148.59 99.17,158.00 100.01,158.00 C100.85,158.00 106.32,153.16 112.16,147.25 L 122.79,136.50 L 122.74,125.00 C122.65,107.13 126.74,94.47 135.66,84.94 C140.77,79.47 144.07,77.46 154.18,73.66 C162.06,70.69 172.89,65.31 175.34,63.15 C177.08,61.61 177.64,61.99 185.38,70.01 C197.51,82.59 201.60,93.29 199.20,106.19 C196.84,118.88 195.27,120.89 160.59,155.83 C142.94,173.61 126.35,189.74 123.72,191.68 C114.39,198.57 100.71,201.50 91.00,198.69 M 158.00,100.49 C158.00,99.92 154.23,95.71 149.63,91.13 L 141.26,82.80 L 138.66,86.20 C132.26,94.59 129.94,105.09 131.94,116.58 C132.59,120.33 133.38,123.81 133.69,124.31 C134.32,125.32 158.00,102.13 158.00,100.49 M 180.89,58.62 C186.82,50.50 180.91,43.90 162.40,37.97 C156.40,36.06 155.01,35.17 153.48,32.33 C151.46,28.58 146.41,25.00 143.13,25.00 C141.96,25.00 141.00,24.55 141.00,24.00 C141.00,22.28 148.35,22.92 151.63,24.92 C153.36,25.97 155.98,28.41 157.45,30.35 C159.13,32.54 161.34,34.12 163.32,34.53 C168.93,35.70 180.72,41.88 183.40,45.07 C187.11,49.47 186.81,53.19 182.39,57.76 C179.81,60.44 179.39,60.68 180.89,58.62 M 134.76,49.49 C129.76,46.68 127.35,38.63 130.30,34.60 C131.49,32.98 131.73,32.96 132.93,34.41 C135.73,37.79 141.55,35.74 143.32,30.75 C144.19,28.30 145.19,28.55 148.56,32.07 C154.91,38.69 150.71,49.54 141.41,50.59 C138.99,50.86 136.45,50.44 134.76,49.49 Z"></path>
                                    </svg>
                                </a>
                                <a class="group -m-1 p-1" aria-label="$TaRDie on Birdeye" href="https://birdeye.so/token/6Wn3FEhbSkFSGuGkkx7YLKiYMnujPxJsG9VT7TU2cQc3?chain=solana">
                                    <svg viewBox="0 30 253 200" aria-hidden="true"  class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M 3.00,217.38 C3.00,216.87 44.29,174.97 94.75,124.26 C170.44,48.20 187.46,31.58 192.00,29.29 C196.86,26.83 198.60,26.51 207.00,26.50 C215.64,26.50 217.12,26.79 223.32,29.73 C235.22,35.36 245.81,48.87 247.58,60.66 C248.35,65.82 247.44,66.95 242.50,66.99 C237.67,67.03 229.74,71.35 225.36,76.32 C223.13,78.86 219.82,84.44 218.01,88.72 C215.08,95.64 214.63,97.99 213.91,110.00 C212.30,136.85 204.59,153.83 186.13,171.20 C176.93,179.85 165.04,186.56 152.43,190.20 C145.79,192.11 142.14,192.49 130.00,192.48 C113.69,192.48 108.19,191.37 94.02,185.24 C79.90,179.14 66.83,179.70 55.98,186.89 C53.52,188.52 46.38,194.62 40.12,200.43 C26.75,212.84 19.95,216.71 9.75,217.66 C5.88,218.02 3.00,217.90 3.00,217.38 M 155.70,169.24 C176.24,161.57 189.16,146.69 193.43,125.79 C196.42,111.13 195.21,99.52 189.45,87.50 C185.42,79.10 177.65,68.99 175.24,69.02 C174.28,69.03 170.45,71.98 166.71,75.58 L 159.93,82.11 L 163.92,86.64 C167.67,90.91 171.03,96.82 172.43,101.61 C172.98,103.51 172.54,103.78 167.91,104.32 C156.43,105.68 149.95,116.75 154.39,127.40 C155.77,130.69 161.60,136.00 163.84,136.00 C164.48,136.00 165.00,136.64 165.00,137.43 C165.00,139.53 157.25,145.53 150.43,148.71 C145.24,151.13 143.31,151.48 135.00,151.45 C123.86,151.43 117.90,149.30 109.28,142.27 C106.39,139.92 103.70,138.00 103.29,138.00 C101.81,138.00 90.00,150.49 90.00,152.06 C90.00,154.05 98.09,160.99 105.81,165.64 C115.72,171.62 121.80,173.05 135.50,172.65 C145.92,172.35 148.58,171.90 155.70,169.24 Z"></path>
                                    </svg>
                                </a>
                                <a class="group -m-1 p-1" aria-label="$TaRDie on DexScreener" href="https://dexscreener.com/solana/3cpwbnfjwb3fvcduwt7jbnwkssdmtwfjnl4zpxrmjbgs">
                                    <svg viewBox="0 0 512 512" aria-hidden="true"  class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M 254.30,456.26 C253.31,454.63 240.82,434.37 226.54,411.24 L 200.59,369.18 L 194.85,374.34 C191.69,377.18 183.89,384.41 177.51,390.42 C167.66,399.68 165.71,401.12 164.59,399.92 C163.86,399.14 157.07,388.38 149.50,376.00 C141.93,363.62 134.86,352.27 133.80,350.76 L 131.87,348.01 L 109.57,366.01 C97.31,375.90 86.98,384.00 86.63,384.00 C86.27,384.00 87.50,380.96 89.36,377.25 C97.97,360.09 106.80,334.05 111.39,312.34 C116.55,287.90 117.15,280.33 117.97,229.50 C118.81,178.06 119.28,172.80 124.59,155.83 C127.47,146.62 135.94,127.78 137.01,128.22 C137.38,128.37 140.74,132.32 144.46,137.00 C148.18,141.68 153.08,147.42 155.33,149.76 C159.33,153.91 159.40,154.10 158.08,157.26 C152.77,169.99 151.78,174.42 152.18,183.60 C152.52,191.37 153.05,193.67 155.81,199.26 C162.99,213.85 181.37,225.00 198.23,225.00 L 203.04,225.00 L 202.38,234.75 C202.02,240.11 201.32,245.02 200.83,245.65 C200.33,246.28 190.70,252.09 179.42,258.56 C168.15,265.03 158.74,270.60 158.53,270.95 C158.31,271.30 166.94,276.52 177.69,282.54 C194.69,292.07 198.04,294.36 203.37,300.12 C218.56,316.52 230.65,345.00 248.55,406.50 C252.23,419.15 255.56,430.09 255.95,430.82 C256.34,431.55 259.65,421.87 263.45,408.82 C280.62,349.92 291.40,323.02 305.18,304.64 C311.54,296.15 314.72,293.84 337.03,281.42 C346.84,275.97 354.56,271.20 354.18,270.83 C353.81,270.46 344.05,264.72 332.50,258.08 L 311.50,246.01 L 310.46,235.96 C309.89,230.44 309.62,225.71 309.88,225.46 C310.13,225.21 312.17,224.99 314.42,224.99 C331.79,224.92 350.06,213.54 357.29,198.27 C360.25,192.03 360.50,190.72 360.47,181.50 C360.44,172.57 360.09,170.67 357.22,163.67 C355.45,159.37 354.00,155.40 354.00,154.84 C354.00,154.29 357.29,149.93 361.31,145.17 C365.33,140.40 370.10,134.59 371.90,132.25 C373.70,129.91 375.55,128.22 376.02,128.51 C377.46,129.40 384.07,144.10 387.03,153.00 C392.97,170.87 393.16,172.78 394.02,223.50 C394.58,256.14 395.31,274.47 396.43,283.50 C400.19,313.94 408.80,345.43 420.34,370.93 C423.44,377.77 425.82,383.51 425.65,383.68 C425.47,383.86 415.28,375.88 403.01,365.96 C390.73,356.04 380.37,348.27 380.00,348.71 C379.62,349.14 372.19,361.09 363.49,375.25 C354.79,389.41 347.36,401.00 346.97,401.00 C346.58,401.00 338.67,393.82 329.38,385.04 C314.16,370.65 312.37,369.25 311.16,370.79 C310.43,371.73 297.99,391.76 283.53,415.30 C269.06,438.84 256.98,458.36 256.67,458.67 C256.36,458.97 255.30,457.89 254.30,456.26 M 255.60,356.89 C245.32,324.68 240.63,312.92 233.32,301.10 C227.89,292.31 215.77,279.34 208.81,274.88 C206.16,273.18 204.00,271.42 204.00,270.97 C204.00,270.51 208.07,267.79 213.05,264.92 C218.02,262.05 222.46,258.98 222.91,258.10 C223.36,257.22 224.00,250.65 224.32,243.50 C225.22,223.54 228.93,212.55 237.98,203.12 C243.93,196.91 249.73,194.05 256.43,194.02 C263.06,193.99 268.62,196.85 274.94,203.53 C284.10,213.21 287.95,225.34 287.98,244.53 C288.00,252.73 288.39,256.11 289.51,257.72 C290.35,258.90 295.07,262.21 300.01,265.06 C304.96,267.91 309.00,270.60 309.00,271.03 C309.00,271.46 306.92,273.03 304.38,274.52 C298.25,278.11 287.36,288.99 282.16,296.72 C275.29,306.91 268.38,322.19 262.42,340.37 C259.33,349.79 256.63,357.68 256.42,357.89 C256.22,358.11 255.85,357.66 255.60,356.89 M 194.50,202.39 C178.63,198.36 171.26,187.87 175.16,174.87 C175.80,172.74 176.81,171.00 177.41,171.01 C178.01,171.01 182.55,173.93 187.50,177.48 C192.45,181.04 201.79,186.95 208.25,190.62 C214.71,194.29 220.00,197.64 220.00,198.05 C220.00,200.51 200.30,203.86 194.50,202.39 M 304.50,202.38 C298.59,200.87 293.00,198.74 293.00,197.98 C293.00,197.51 297.16,194.79 302.25,191.93 C309.75,187.71 320.40,180.77 333.55,171.52 C335.47,170.18 336.95,171.86 338.05,176.63 C341.18,190.15 330.26,201.53 313.22,202.51 C309.52,202.72 305.60,202.66 304.50,202.38 M 221.50,173.67 C181.60,150.41 144.46,114.81 130.02,86.00 C123.80,73.59 123.97,72.86 131.35,80.24 C138.30,87.19 149.96,94.00 154.90,94.00 C156.73,94.00 159.84,91.97 165.02,87.41 C206.21,51.10 264.89,42.57 314.94,65.62 C324.70,70.12 339.84,80.27 348.15,87.89 C353.14,92.47 355.54,94.00 357.74,94.00 C362.80,94.00 373.04,88.06 380.44,80.83 C384.26,77.10 387.55,74.22 387.76,74.43 C388.81,75.48 377.59,95.39 370.64,104.77 C351.98,129.99 315.14,161.44 287.72,175.55 L 280.14,179.45 L 272.95,175.98 C266.25,172.74 265.08,172.50 256.04,172.50 C247.03,172.50 245.86,172.74 240.02,175.75 C236.55,177.54 232.99,178.98 232.11,178.96 C231.22,178.94 226.45,176.56 221.50,173.67 Z"></path>  
                                    </svg>
                                </a>
                                <a class="group -m-1 p-1" aria-label="$TaRDie on Jupiter" href="https://jup.ag/swap/TaRDie_6Wn3FEhbSkFSGuGkkx7YLKiYMnujPxJsG9VT7TU2cQc3-SOL">
                                    <svg viewBox="0 0 500 500" aria-hidden="true"  class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300">
                                        <path d="M 238.24,438.27 C235.80,437.82 235.60,437.58 227.31,425.00 C202.29,387.01 165.10,357.24 119.46,338.68 C97.24,329.64 79.84,325.61 55.57,323.89 C47.28,323.30 39.47,322.41 38.21,321.91 C35.79,320.96 32.61,314.73 26.40,298.79 C22.57,288.97 22.19,285.50 24.79,284.11 C31.58,280.48 61.69,278.24 81.69,279.88 C102.49,281.58 115.71,284.66 138.87,293.16 C173.99,306.07 200.10,322.93 227.56,350.42 C243.76,366.64 251.82,376.75 260.41,391.60 C269.33,407.02 277.34,428.63 275.34,431.84 C274.00,433.98 267.13,435.68 254.55,436.99 C249.02,437.56 243.60,438.18 242.50,438.36 C241.40,438.53 239.48,438.49 238.24,438.27 M 192.50,436.05 C190.85,435.63 185.90,434.48 181.50,433.51 C144.19,425.28 105.95,404.80 79.13,378.68 C63.64,363.59 54.15,352.18 55.41,350.14 C56.10,349.03 67.44,350.60 79.50,353.47 C118.15,362.67 150.54,380.10 179.86,407.50 C188.75,415.80 204.00,433.95 204.00,436.22 C204.00,437.19 196.52,437.08 192.50,436.05 M 309.54,421.39 C308.69,420.55 307.74,418.65 307.43,417.18 C304.25,402.43 292.93,377.72 281.93,361.50 C232.01,287.92 135.97,239.02 53.00,244.93 C37.35,246.05 29.27,247.29 22.84,249.56 C16.83,251.68 14.15,251.43 13.46,248.71 C13.15,247.45 12.80,241.43 12.69,235.33 C12.46,222.01 12.53,221.91 24.40,216.11 C72.29,192.71 156.76,206.98 225.03,250.00 C245.89,263.15 261.69,275.70 278.52,292.50 C313.50,327.40 334.13,365.64 335.71,398.50 C336.34,411.46 336.79,410.74 324.07,417.02 C312.01,422.98 311.33,423.19 309.54,421.39 M 374.05,378.25 C373.48,376.19 373.01,373.56 373.01,372.42 C372.99,367.84 365.48,346.75 359.38,334.15 C347.36,309.35 331.08,287.00 309.02,265.00 C264.58,220.70 205.38,186.90 146.23,172.08 C119.01,165.26 112.94,164.53 83.00,164.51 C58.05,164.50 54.50,164.71 44.76,166.80 C38.86,168.06 31.47,169.98 28.36,171.05 C20.40,173.79 18.00,173.65 18.00,170.47 C18.00,166.19 22.91,157.96 28.85,152.28 C39.00,142.56 59.27,134.37 79.32,131.89 C92.31,130.27 122.38,131.38 137.50,134.02 C191.26,143.40 246.30,168.24 295.50,205.30 C342.15,240.44 376.42,284.59 386.95,323.10 C391.24,338.81 391.25,357.18 386.96,368.15 C385.10,372.91 377.80,382.00 375.84,382.00 C375.43,382.00 374.63,380.31 374.05,378.25 M 425.54,290.45 C424.69,288.42 424.00,286.60 424.00,286.40 C424.00,285.03 415.97,269.36 411.36,261.75 C388.38,223.81 353.83,187.85 312.50,158.89 C252.93,117.15 186.58,90.58 126.70,84.48 C109.46,82.73 99.83,82.65 81.74,84.13 C74.14,84.74 67.60,84.93 67.21,84.53 C65.97,83.27 73.18,78.04 82.50,73.43 C98.76,65.39 117.79,62.30 144.91,63.30 C184.75,64.77 225.83,76.13 269.00,97.61 C350.77,138.31 413.62,202.14 427.90,259.00 C432.73,278.20 430.86,303.16 425.54,290.45 M 427.46,166.42 C406.28,140.67 380.15,117.58 342.65,91.48 C330.06,82.72 297.62,64.67 279.15,56.15 C248.08,41.81 211.64,30.38 183.50,26.15 C166.82,23.65 168.63,22.44 195.00,18.48 C240.84,11.60 284.01,18.39 325.00,38.93 C339.00,45.94 345.24,49.85 359.51,60.57 C387.86,81.86 413.26,114.06 426.99,146.08 C430.41,154.07 438.00,174.80 438.00,176.17 C438.00,178.48 435.39,176.06 427.46,166.42 Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 sm:mt-20">
            <div class="-my-4 flex justify-center gap-5 overflow-hidden py-4 sm:gap-8">
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 rotate-2"><img alt="" width="3744" height="5616" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/tardie4.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 -rotate-2"><img alt="" width="3936" height="2624" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/tardie2.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 rotate-2"><img alt="" width="5760" height="3840" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/tardie1.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 rotate-2"><img alt="" width="2400" height="3000" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/tardie3.jpeg"></div>
                <div class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl dark:bg-zinc-800 -rotate-2"><img alt="" width="4240" height="2384" decoding="async" class="absolute inset-0 h-full w-full object-cover" style="color:transparent" sizes="(min-width: 640px) 18rem, 11rem" src="/img/tardie5.jpeg"></div>
            </div>
        </div>
        <div class="sm:px-8 mt-24 md:mt-28">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="relative px-4 sm:px-8 lg:px-12">
                    <div class="mx-auto max-w-2xl lg:max-w-5xl">
                        <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
                            <div class="flex flex-col gap-16">
                                <a class="twitter-timeline" data-lang="en" data-height="1000" data-theme="dark" href="https://twitter.com/TardieBarbie?ref_src=twsrc%5Etfw">Tweets by TaRDie bARBie </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                
                                <!-- Article link format for future
                                <article class="group relative flex flex-col items-start">
                                    <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                                        <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div>
                                        <a href="/articles/crafting-a-design-system-for-a-multiplanetary-future">
                                            <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                                            <span class="relative z-10">This is a Sample Post</span>
                                        </a>
                                    </h2>
                                    <time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024-03-01"><span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>March 1, 2024</time>
                                    <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">This section here will be for highlighted social media posts or we could do blog articles. We get TaRDie.</p>
                                    <div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">
                                        View social post
                                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                                            <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </article>
                                -->

                            </div>
                            <div class="space-y-10 lg:pl-16 xl:pl-24">
                                <form class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40" method="post" action="{{ route('submit') }}">
                                    @csrf
                                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                            <path d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                            <path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                        </svg><span class="ml-3">Get Down with the Syndrome:</span></h2>
                                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">Enter your SOL address and X handle for a surprise..</p>
                                    <div class="mt-6 flex">
                                        <input type="text" name="solana" id="solana" required="" placeholder="Solana address" aria-label="Solana address" class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10"> 
                                    </div>
                                    @error('solana')
                                        <div class="mt-6 flex">
                                            <span role="alert" class="text-red-500">{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <div class="mt-6 flex">
                                        <input type="text" name="handle" id="handle" required="" placeholder="X handle" aria-label="X handle" class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(theme(spacing.2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/10 sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10">
                                        <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none" type="submit">Submit</button>
                                    </div>
                                    @error('handle')
                                        <div class="mt-6 flex">
                                            <span role="alert" class="text-red-500">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </form>
                                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                                    <h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
                                            <path d="M2.75 9.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z" class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500"></path>
                                            <path d="M3 14.25h6.249c.484 0 .952-.002 1.316.319l.777.682a.996.996 0 0 0 1.316 0l.777-.682c.364-.32.832-.319 1.316-.319H21M8.75 6.5V4.75a2 2 0 0 1 2-2h2.5a2 2 0 0 1 2 2V6.5" class="stroke-zinc-400 dark:stroke-zinc-500"></path>
                                        </svg><span class="ml-3">Roadmap</span></h2>
                                    <ol class="mt-6 space-y-4">
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="32" height="32" decoding="async" class="h-7 w-7 object-cover rounded" style="color:transparent" src="/img/circle-tardie.png"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">TaRDie</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">TaRDie bArbIE</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 1</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Mar</time> <span aria-hidden="true">—</span> <time datetime="2024">Apr</time></dd>
                                            </dl>
                                        </li>
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="28" height="28" decoding="async" class="h-7 w-7" style="color:transparent" src="/img/circle-tardie.png"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">TaRDie</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">TaRDie bArbIE</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 2</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">May</time> <span aria-hidden="true">—</span> <time datetime="2024">Jun</time></dd>
                                            </dl>
                                        </li>
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="28" height="28" decoding="async" class="h-7 w-7" style="color:transparent" src="/img/circle-tardie.png"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">TaRDie</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">TaRDie bArbIE</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 3</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Jul</time> <span aria-hidden="true">—</span> <time datetime="2024">Aug</time></dd>
                                            </dl>
                                        </li>
                                        <li class="flex gap-4">
                                            <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0"><img alt="" loading="lazy" width="28" height="28" decoding="async" class="h-7 w-7" style="color:transparent" src="/img/circle-tardie.png"></div>
                                            <dl class="flex flex-auto flex-wrap gap-x-2">
                                                <dt class="sr-only">TaRDie</dt>
                                                <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">TaRDie bArbIE</dd>
                                                <dt class="sr-only">Phase</dt>
                                                <dd class="text-xs text-zinc-500 dark:text-zinc-400">Phase 4</dd>
                                                <dt class="sr-only">Date</dt>
                                                <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2024 until 2024"><time datetime="2024">Sep</time> <span aria-hidden="true">—</span> <time datetime="2024">Oct</time></dd>
                                            </dl>
                                        </li>
                                    </ol>
                                    <a class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-50 font-medium text-zinc-900 hover:bg-zinc-100 active:bg-zinc-100 active:text-zinc-900/60 dark:bg-zinc-800/50 dark:text-zinc-300 dark:hover:bg-zinc-800 dark:hover:text-zinc-50 dark:active:bg-zinc-800/50 dark:active:text-zinc-50/70 group mt-6 w-full" href="{{ route('whitepaper') }}">Download Whitepaper
                                        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="h-4 w-4 stroke-zinc-400 transition group-active:stroke-zinc-600 dark:group-hover:stroke-zinc-50 dark:group-active:stroke-zinc-50">
                                            <path d="M4.75 8.75 8 12.25m0 0 3.25-3.5M8 12.25v-8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection     
