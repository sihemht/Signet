<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenLibraryService
{
    public function __construct(
        private HttpClientInterface $client
    ) {
    }
    /**
     * @return array<mixed>
     */
    public function searchBooks(string $query)
    {
        $response = $this->client->request(
            'GET',
            'https://openlibrary.org/search.json',
            ['query' => ['q' => $query, 'limit' => 10]]
        );

        $data = $response->toArray();

        return $data['docs'] ?? [];
    }

    /**
     * @return array<mixed>
     */
    public function getWorkDetails(string $workKey): array
    {
        // Enlève les slashs superflus pour construire l'URL
        $id = str_replace(['/works/', '/'], '', $workKey);

        $url = "https://openlibrary.org/works/" . $id . ".json";

        try {
            $response = $this->client->request('GET', $url);

            if ($response->getStatusCode() !== 200) {
                return [];
            }

            return $response->toArray();
        } catch (\Exception $e) {
            return [];
        }
    }
}
