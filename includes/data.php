<?php

$services = [
    [
        'slug' => 'electrician',
        'name' => 'Electricians',
        'icon' => '⚡',
        'short' => 'Installations, repairs and electrical maintenance.',
        'desc' => 'Find qualified electricians for wiring, lighting, solar setups, repairs and safety inspections.',
    ],
    [
        'slug' => 'plumber',
        'name' => 'Plumbers',
        'icon' => '🔧',
        'short' => 'Water systems, pipe repairs and installations.',
        'desc' => 'Connect with reliable plumbers for leaks, drainage, bathrooms, tanks and new plumbing work.',
    ],
    [
        'slug' => 'mechanic',
        'name' => 'Mechanics',
        'icon' => '🚗',
        'short' => 'Vehicle repairs, servicing and diagnostics.',
        'desc' => 'Book experienced mechanics for engine work, brakes, servicing and roadside support.',
    ],
    [
        'slug' => 'photographer',
        'name' => 'Photographers',
        'icon' => '📷',
        'short' => 'Events, portraits and professional shoots.',
        'desc' => 'Hire photographers for weddings, graduations, products, portraits and creative projects.',
    ],
    [
        'slug' => 'web-designer',
        'name' => 'Web Designers',
        'icon' => '💻',
        'short' => 'Modern websites for businesses and brands.',
        'desc' => 'Work with web designers who build responsive sites, landing pages and online presence.',
    ],
    [
        'slug' => 'hair-beauty',
        'name' => 'Hair & Beauty',
        'icon' => '💇',
        'short' => 'Hair, beauty and personal care services.',
        'desc' => 'Discover stylists and beauty professionals for salons, events and personal grooming.',
    ],
];

$professionals = [
    [
        'id' => 1,
        'name' => 'David Okello',
        'service' => 'Electrician',
        'slug' => 'electrician',
        'location' => 'Kampala',
        'rating' => 4.9,
        'reviews' => 32,
        'experience' => 8,
        'phone' => '+256 700 111 001',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Experienced electrician specializing in home electrical installations, solar wiring and repairs.',
    ],
    [
        'id' => 2,
        'name' => 'Brian Kato',
        'service' => 'Web Designer',
        'slug' => 'web-designer',
        'location' => 'Kampala',
        'rating' => 4.8,
        'reviews' => 27,
        'experience' => 6,
        'phone' => '+256 700 111 002',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Creative web designer helping businesses build modern and responsive websites.',
    ],
    [
        'id' => 3,
        'name' => 'Sarah Namukasa',
        'service' => 'Photographer',
        'slug' => 'photographer',
        'location' => 'Kampala',
        'rating' => 5.0,
        'reviews' => 41,
        'experience' => 7,
        'phone' => '+256 700 111 003',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Professional photographer specializing in events, portraits and creative photography.',
    ],
    [
        'id' => 4,
        'name' => 'James Mugisha',
        'service' => 'Plumber',
        'slug' => 'plumber',
        'location' => 'Wakiso',
        'rating' => 4.7,
        'reviews' => 19,
        'experience' => 10,
        'phone' => '+256 700 111 004',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Reliable plumber for residential and commercial water systems, tanks and leak repairs.',
    ],
    [
        'id' => 5,
        'name' => 'Peter Ssemakula',
        'service' => 'Mechanic',
        'slug' => 'mechanic',
        'location' => 'Entebbe',
        'rating' => 4.6,
        'reviews' => 22,
        'experience' => 12,
        'phone' => '+256 700 111 005',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Vehicle mechanic covering servicing, diagnostics, brakes and engine repairs.',
    ],
    [
        'id' => 6,
        'name' => 'Aisha Nalwoga',
        'service' => 'Hair & Beauty',
        'slug' => 'hair-beauty',
        'location' => 'Kampala',
        'rating' => 4.9,
        'reviews' => 54,
        'experience' => 9,
        'phone' => '+256 700 111 006',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Hair and beauty specialist offering bridal looks, styling and personal care services.',
    ],
    [
        'id' => 7,
        'name' => 'Grace Atim',
        'service' => 'Electrician',
        'slug' => 'electrician',
        'location' => 'Jinja',
        'rating' => 4.5,
        'reviews' => 14,
        'experience' => 5,
        'phone' => '+256 700 111 007',
        'verified' => false,
        'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Electrician focused on lighting, sockets, fault finding and safe household wiring.',
    ],
    [
        'id' => 8,
        'name' => 'Daniel Opio',
        'service' => 'Photographer',
        'slug' => 'photographer',
        'location' => 'Gulu',
        'rating' => 4.8,
        'reviews' => 18,
        'experience' => 4,
        'phone' => '+256 700 111 008',
        'verified' => true,
        'image' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=600&q=80',
        'bio' => 'Event and documentary photographer covering ceremonies, brands and community stories.',
    ],
];

function find_professional(array $professionals, int $id): ?array
{
    foreach ($professionals as $pro) {
        if ((int) $pro['id'] === $id) {
            return $pro;
        }
    }
    return null;
}

function search_directory(array $professionals, array $services, string $query): array
{
    $q = mb_strtolower(trim($query));
    $matchedPros = [];
    $matchedServices = [];

    if ($q === '') {
        return ['professionals' => [], 'services' => []];
    }

    foreach ($professionals as $pro) {
        $haystack = mb_strtolower($pro['name'] . ' ' . $pro['service'] . ' ' . $pro['location'] . ' ' . $pro['bio']);
        if (str_contains($haystack, $q)) {
            $matchedPros[] = $pro;
        }
    }

    foreach ($services as $service) {
        $haystack = mb_strtolower($service['name'] . ' ' . $service['short'] . ' ' . $service['desc']);
        if (str_contains($haystack, $q)) {
            $matchedServices[] = $service;
        }
    }

    return ['professionals' => $matchedPros, 'services' => $matchedServices];
}
