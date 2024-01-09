<?php

function language_list(...$langs): array {
    return $langs;
}

function add_to_language_list(array $langs, string $lang): array {
    array_push($langs, $lang);
    return $langs;
}

function prune_language_list(array $langs): array {
    $copy = $langs;
    array_shift($copy);
    return $copy;
}

function current_language(array $langs): string {
    return $langs[0];
}

function language_list_length(array $langs): int {
    return count($langs);
}
