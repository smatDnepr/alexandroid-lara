<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $telegram
 * @property string|null $viber
 * @property string|null $whatsapp
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $flickr
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereFlickr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereViber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereWhatsapp($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Genre
 *
 * @property int $id
 * @property array|null $title
 * @property array|null $slug
 * @property int $is_published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $slug_storage
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Portfolio[] $portfolios
 * @property-read int|null $portfolios_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GenrePrice[] $prices
 * @property-read int|null $prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GenrePromoSlide[] $promoSlides
 * @property-read int|null $promo_slides_count
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereUpdatedAt($value)
 */
	class Genre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenreFaq
 *
 * @property int $id
 * @property int $order
 * @property int $genre_id
 * @property array $question
 * @property array $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreFaq whereUpdatedAt($value)
 */
	class GenreFaq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenreInfoSliderSlide
 *
 * @property int $id
 * @property int $order
 * @property int $genre_id
 * @property array|null $title
 * @property array|null $text
 * @property string|null $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderSlide whereUpdatedAt($value)
 */
	class GenreInfoSliderSlide extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenreInfoSliderTitle
 *
 * @property int $id
 * @property string|null $background
 * @property array|null $title
 * @property int $genre_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreInfoSliderTitle whereUpdatedAt($value)
 */
	class GenreInfoSliderTitle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenrePortfolio
 *
 * @property int $id
 * @property int $order
 * @property int $genre_id
 * @property int $portfolio_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio wherePortfolioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePortfolio whereUpdatedAt($value)
 */
	class GenrePortfolio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenrePrice
 *
 * @property int $id
 * @property int $order
 * @property array|null $title
 * @property array|null $description
 * @property array|null $money
 * @property int $genre_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Genre $genre
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePrice whereUpdatedAt($value)
 */
	class GenrePrice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenrePromoSlide
 *
 * @property int $id
 * @property int $order
 * @property string|null $img
 * @property array|null $title
 * @property array|null $text
 * @property int $genre_id
 * @property int $btn_functional
 * @property string|null $btn_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Genre $genre
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereBtnFunctional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereBtnLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenrePromoSlide whereUpdatedAt($value)
 */
	class GenrePromoSlide extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenreSeoMeta
 *
 * @property int $id
 * @property array|null $meta_title
 * @property array|null $meta_description
 * @property array|null $meta_keywords
 * @property int $genre_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoMeta whereUpdatedAt($value)
 */
	class GenreSeoMeta extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenreSeoText
 *
 * @property int $id
 * @property array|null $text
 * @property int $genre_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreSeoText whereUpdatedAt($value)
 */
	class GenreSeoText extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GoogleAnalytic
 *
 * @property int $id
 * @property string|null $code_head
 * @property string|null $code_body
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic query()
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic whereCodeBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic whereCodeHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GoogleAnalytic whereUpdatedAt($value)
 */
	class GoogleAnalytic extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Landing
 *
 * @property int $id
 * @property array|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Landing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Landing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Landing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Landing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landing whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Landing whereUpdatedAt($value)
 */
	class Landing extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingAbout
 *
 * @property int $id
 * @property string|null $background
 * @property array|null $text
 * @property string|null $picture
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingAbout whereUpdatedAt($value)
 */
	class LandingAbout extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingFinalInfo
 *
 * @property int $id
 * @property string|null $background
 * @property array|null $title
 * @property array|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingFinalInfo whereUpdatedAt($value)
 */
	class LandingFinalInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingInfoSliderCommon
 *
 * @property int $id
 * @property array|null $title
 * @property array|null $subtitle
 * @property string|null $background
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderCommon whereUpdatedAt($value)
 */
	class LandingInfoSliderCommon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingInfoSliderSlide
 *
 * @property int $id
 * @property int $order
 * @property array|null $title
 * @property array|null $text
 * @property string|null $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingInfoSliderSlide whereUpdatedAt($value)
 */
	class LandingInfoSliderSlide extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingPortfolio
 *
 * @property int $id
 * @property int $order
 * @property int $portfolio_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Portfolio|null $portfolio
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio wherePortfolioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPortfolio whereUpdatedAt($value)
 */
	class LandingPortfolio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingPromoSlide
 *
 * @property int $id
 * @property int $order
 * @property string|null $img
 * @property array|null $title
 * @property array|null $text
 * @property int $btn_functional
 * @property string|null $btn_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereBtnFunctional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereBtnLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingPromoSlide whereUpdatedAt($value)
 */
	class LandingPromoSlide extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LandingSeoMeta
 *
 * @property int $id
 * @property array|null $meta_title
 * @property array|null $meta_description
 * @property array|null $meta_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LandingSeoMeta whereUpdatedAt($value)
 */
	class LandingSeoMeta extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MyEmail
 *
 * @property int $id
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail query()
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyEmail whereUpdatedAt($value)
 */
	class MyEmail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PagePolitika
 *
 * @property int $id
 * @property array|null $title
 * @property array|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika query()
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PagePolitika whereUpdatedAt($value)
 */
	class PagePolitika extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Partner
 *
 * @property int $id
 * @property int $order
 * @property array|null $title
 * @property string|null $logo
 * @property string|null $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partner whereUpdatedAt($value)
 */
	class Partner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Portfolio
 *
 * @property int $id
 * @property array|null $title
 * @property array|null $slug
 * @property string|null $date
 * @property int|null $genre_id
 * @property int|null $partner_id
 * @property array|null $partner_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Genre|null $genre
 * @property-read string $slug_storage
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PortfolioImage[] $images
 * @property-read int|null $images_count
 * @property-read \App\Models\Partner|null $partner
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio wherePartnerTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereUpdatedAt($value)
 */
	class Portfolio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PortfolioImage
 *
 * @property int $id
 * @property int $order
 * @property int $portfolio_id
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Portfolio $portfolio
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage wherePortfolioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioImage whereUpdatedAt($value)
 */
	class PortfolioImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

