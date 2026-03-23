<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenLibraryService
{

    public function __construct(
        private HttpClientInterface $client
    ) {
    }

    public function searchBooks(string $query): array
    {
        $response = $this->client->request(
            'GET',
            'https://openlibrary.org/search.json',
            ['query' => ['q' => $query, 'limit' => 10]]
        );

        $data = $response->toArray();

        return $data['docs'] ?? [];
    }

    public function getWorkDetails(string $workKey): array{

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
