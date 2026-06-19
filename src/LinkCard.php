<?php

/**
 * Generates an HTML link card for game-related content.
 */
function renderLinkCard(): string
{
    $siteUrl = 'https://home-official-aiyouxi.com.cn';
    $siteName = '爱游戏';
    $description = '探索爱游戏官方主页，获取最新游戏资讯与精彩内容。';
    $thumbnailUrl = 'https://home-official-aiyouxi.com.cn/images/og-image.jpg';

    $escapedUrl = htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8');
    $escapedName = htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8');
    $escapedDesc = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $escapedThumb = htmlspecialchars($thumbnailUrl, ENT_QUOTES, 'UTF-8');

    $html = '<div class="link-card">' . "\n";
    $html .= '    <a href="' . $escapedUrl . '" target="_blank" rel="noopener noreferrer">' . "\n";
    $html .= '        <div class="link-card-thumbnail">' . "\n";
    $html .= '            <img src="' . $escapedThumb . '" alt="' . $escapedName . ' Thumbnail" loading="lazy" />' . "\n";
    $html .= '        </div>' . "\n";
    $html .= '        <div class="link-card-body">' . "\n";
    $html .= '            <span class="link-card-title">' . $escapedName . '</span>' . "\n";
    $html .= '            <p class="link-card-description">' . $escapedDesc . '</p>' . "\n";
    $html .= '            <span class="link-card-url">' . $escapedUrl . '</span>' . "\n";
    $html .= '        </div>' . "\n";
    $html .= '    </a>' . "\n";
    $html .= '</div>' . "\n";

    return $html;
}

/**
 * Outputs the rendered link card directly.
 */
function displayLinkCard(): void
{
    echo renderLinkCard();
}

/**
 * Example: Get card data as an array for custom usage.
 */
function getLinkCardData(): array
{
    return [
        'url'         => 'https://home-official-aiyouxi.com.cn',
        'name'        => '爱游戏',
        'description' => '探索爱游戏官方主页，获取最新游戏资讯与精彩内容。',
        'thumbnail'   => 'https://home-official-aiyouxi.com.cn/images/og-image.jpg',
    ];
}

/**
 * Renders a link card from a data array (useful for multiple cards).
 *
 * @param array $cardData Must contain keys: url, name, description, thumbnail
 * @return string Escaped HTML
 */
function renderLinkCardFromData(array $cardData): string
{
    $url = htmlspecialchars($cardData['url'] ?? '', ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($cardData['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $desc = htmlspecialchars($cardData['description'] ?? '', ENT_QUOTES, 'UTF-8');
    $thumb = htmlspecialchars($cardData['thumbnail'] ?? '', ENT_QUOTES, 'UTF-8');

    $html = '<div class="link-card">' . "\n";
    $html .= '    <a href="' . $url . '" target="_blank" rel="noopener noreferrer">' . "\n";
    $html .= '        <div class="link-card-thumbnail">' . "\n";
    $html .= '            <img src="' . $thumb . '" alt="' . $name . ' Thumbnail" loading="lazy" />' . "\n";
    $html .= '        </div>' . "\n";
    $html .= '        <div class="link-card-body">' . "\n";
    $html .= '            <span class="link-card-title">' . $name . '</span>' . "\n";
    $html .= '            <p class="link-card-description">' . $desc . '</p>' . "\n";
    $html .= '            <span class="link-card-url">' . $url . '</span>' . "\n";
    $html .= '        </div>' . "\n";
    $html .= '    </a>' . "\n";
    $html .= '</div>' . "\n";

    return $html;
}