<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        $navbar = [
            [
                'name' => 'Cloud Hosting',
                'item' =>
                [
                    'Value Hybrid Performance' => '#',
                    'WordPress Hosting' => '#',
                    'Unlimited Hosting' => '#',
                    'High Performance Bisnis' => '#',
                    'High Performance Enterprise' => '#',
                    'Private Label cPanel Reseller' => '#',
                ]
            ], [
                'name' => 'Server',
                'item' => [
                    'Cloud VPS KVM SSD' => '#',
                    'Server Sekolah CBT/Moodle (KVM)' => '#',
                    'Fleksibel VPS' => '#',
                    'Dedicated Server' => '#',
                    'Colocation Server' => '#',
                    'Leased To Owned Dedicated Server' => '#',
                ]
            ], [
                'name' => 'Internet Access',
                'item' => [
                    'Broadband Home' => '#',
                    'Broadband Business' => '#',
                    'Broadband Wireless' => '#',
                    'Check Coverage Area Broadband' => '#',
                ]
            ], [
                'name' => 'Domain',
                'item' => [
                    'Daftar Domain HOT SALE' => '#',
                    'Domain Premium .id PROMO' => '#',
                    'Domain Backorder' => '#',
                    'Domain Privacy Protection' => '#',
                    'Sewa Domain' => '#',
                    'Jual Beli & Lelang Domain' => '#',
                    'Domain Negotiator/Domain Broker' => '#',
                    'Private Label Domain Reseller' => '#',
                ]
            ], [
                'name' => 'Email Suite',
                'item' => [
                    'EC Collaboration Suite' => '#',
                    'Microsoft 365' => '#',
                    'Google Workspace' => '#',
                    'Mailtogo' => '#',
                ]
            ], [
                'name' => 'Services',
                'item' => [
                    'SSL' => '#',
                    'Web Design' => '#',
                    'Manage The Box Server' => '#',
                    'Digital Signature' => '#',
                    'Diego VPN HOT SALE' => '#',
                    'Licenses' => '#',
                    'Offline Backup' => '#',
                    'Extended Support' => '#',
                    'Advanced Backup' => '#',
                    'Flexi Main Domain' => '#',
                    'Qwords Data Protection' => '#',
                    'Hosting Insurance' => '#',
                    'Qwords Link-Q' => '#',
                ]
            ], [
                'name' => 'Customer Care',
                'item' => [
                    'Pembayaran' => '#',
                    'Informasi Lengkap' => '#',
                    'Bantuan 24 Jam' => '#',
                    'Knowledge Base' => '#',
                    'FAQ' => '#',
                    'Blog' => '#',
                    'Kontak' => '#',
                    'Qwords Rewards' => '#',
                    'Afiliasi' => '#',
                    'Network Tools' => '#',
                ]
            ]
        ];

        $hosting_vps = [
            [
                'name' => 'Value Hybrid Performance',
                'title' => 'VHP1',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-vhp.svg',
                'price' => 'Rp 14.500',
                'price_before' => 'Rp 24.500',
                'disk' => '3 GB',
                'bandwidth' => 'Unlimited',
                'core_cpu' => '0.5 Core',
                'addon_parked_domain' => 'No',
                'link' => '#'
            ], [
                'name' => 'Unlimited Hosting',
                'title' => 'Signature',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-signature.svg',
                'price' => 'Rp 84.900',
                'price_before' => 'Rp 109.000',
                'disk' => 'Unlimited',
                'bandwidth' => 'Unlimited',
                'core_cpu' => '1 Core',
                'addon_parked_domain' => '5 / 5',
                'link' => '#'
            ], [
                'name' => 'High Performance',
                'title' => 'HPCH Bisnis 1',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-hpch.svg',
                'price' => 'Rp 69.000',
                'price_before' => 'Rp 80.000',
                'disk' => '3 GB',
                'bandwidth' => 'Unlimited',
                'core_cpu' => '1 Core',
                'addon_parked_domain' => '-',
                'link' => '#'
            ], [
                'name' => 'Cloud VPS KVM SSD',
                'title' => 'VPS SC1',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-startup.svg',
                'price' => 'Rp 75.000',
                'price_before' => 'Rp 135.000',
                'disk' => '25 GB',
                'bandwidth' => 'Unlimited',
                'core_cpu' => '1 Core',
                'addon_parked_domain' => 'Unlimited',
                'link' => '#'
            ]
        ];

        $komitmen = [
            [
                'title' => 'Layanan 24/7',
                'desc' => 'Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.',
                'coordinate' => '-210px -10px'
            ],
            [
                'title' => 'Panduan Manual Lengkap',
                'desc' => 'Qwords dilengkapi dengan halaman knowledge base yang berisi tutorial dan tips seputar pengelolaan website. Dapat diakses dengan mudah dan solutif.',
                'coordinate' => '-110px -210px'
            ],
            [
                'title' => 'Uptime 99.99%',
                'desc' => 'Uptime Network & Server di atas 99.99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.',
                'coordinate' => '-110px -110px'
            ],
            [
                'title' => 'Jaminan keamanan',
                'desc' => 'Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.',
                'coordinate' => '-10px -210px'
            ],
            [
                'title' => 'Clustered DNS',
                'desc' => 'DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.',
                'coordinate' => '-210px -110px'
            ],
            [
                'title' => 'High Enterprise Server',
                'desc' => 'Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.',
                'coordinate' => '-110px -10px'
            ],
            [
                'title' => 'Tier 1 Network',
                'desc' => 'Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.',
                'coordinate' => '-10px -110px'
            ],
            [
                'title' => 'Peering Network',
                'desc' => 'Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.',
                'coordinate' => '-10px -10px'
            ]

        ];

        //         Card image
        // Perusahaan
        // Wujudkan perusahaan profesional dan berkelas dengan dukungan website terbaik dan fitur keamanan ekstra

        // Card image
        // Organisasi dan Komunitas
        // Website sebagai wadah perkumpulan komunitas atau organisasi di internet

        // Card image
        // UMKM dan Toko Online
        // Mendukung kebutuhan website yang fokus dalam pemasaran barang/ jasa secara online

        // Card image
        // Sekolah
        // Infrastruktur terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring.

        // Card image
        // Developer
        // Tersedia paket hosting dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control.

        // Card image
        // Blogger dan Personal
        // Memfasilitasi blogger dengan infrastruktur website terbaik serta template website premium untuk tampil lebih profesional.

        $solusi = [
            [
                'title' => 'Perusahaan',
                'desc' => 'Wujudkan perusahaan profesional dan berkelas dengan dukungan website terbaik dan fitur keamanan ekstra',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-corporate.png',
                'link' => '#'
            ],
            [
                'title' => 'Organisasi dan Komunitas',
                'desc' => 'Website sebagai wadah perkumpulan komunitas atau organisasi di internet',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-organisasi.png',
                'link' => '#'
            ],
            [
                'title' => 'UMKM dan Toko Online',
                'desc' => 'Mendukung kebutuhan website yang fokus dalam pemasaran barang/ jasa secara online',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-umkm.png',
                'link' => '#'
            ],
            [
                'title' => 'Sekolah',
                'desc' => 'Infrastruktur terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring.',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-sekolah.png',
                'link' => '#'
            ],
            [
                'title' => 'Developer',
                'desc' => 'Tersedia paket hosting dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control.',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-developer.png',
                'link' => '#'
            ],
            [
                'title' => 'Blogger dan Personal',
                'desc' => 'Memfasilitasi blogger dengan infrastruktur website terbaik serta template website premium untuk tampil lebih profesional.',
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-blogger.png',
                'link' => '#'
            ]
        ];

        $partner = [
            [
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/googlecloud.png',
                'link' => '#'
            ],
            [
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_cpanel.png',
                'link' => '#'
            ],
            [
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_idea.png',
                'link' => '#'
            ],
            [
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_achi.png',
                'link' => '#'
            ],
            [
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_pandi.png',
                'link' => '#'
            ],
            [
                'img' => 'https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/AREDO-transparent.png',
                'link' => '#'
            ]
        ];

        return view('landing', array('navbar' => $navbar, 'hosting_vps' => $hosting_vps, 'komitmen' => $komitmen, 'solusi' => $solusi, 'partner' => $partner));
    }
}
