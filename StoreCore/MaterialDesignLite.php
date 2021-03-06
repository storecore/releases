<?php
namespace StoreCore;

/**
 * Material Design Lite (MDL)
 *
 * @author    Ward van der Put <Ward.van.der.Put@gmail.com>
 * @copyright Copyright (c) 2016 StoreCore
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License
 * @package   StoreCore\CMS
 * @see       https://getmdl.io/components/index.html Material Design Lite
 * @version   0.1.0
 */
class MaterialDesignLite
{
    const VERSION = '0.1.0';

    /**
     * @var string $BadgeBackGroundColor     Background color of mdl-badge counter and icon alerts.
     * @var string $ChipBackgroundColor      Background color of mdl-chip containers.
     * @var string $LinkColor                Text color of <a> link tags.
     * @var string $MarkBackgroundColor      Highlight color of <mark> marker tags.
     * @var string $PrimaryTextColor         Default text color.
     * @var string $SecondaryTextColor       Color of supporting text.
     * @var string $SelectionBackgroundColor Highlight color of selected text.
     */
    protected $BadgeBackGroundColor = '#f44336';        // rgb(244,67,54)
    protected $ChipBackgroundColor = '#dedede';         // rgb(222,222,222)
    protected $LinkColor = '#1976d2';                   // rgb(25,118,210)
    protected $MarkBackgroundColor = '#ffff8d';         // rgb(255,255,141)
    protected $PrimaryTextColor = 'rgba(0,0,0,.87)';    // #212121
    protected $SecondaryTextColor = 'rgba(0,0,0,.54)';  // #757575
    protected $SelectionBackgroundColor = '#b3d4fc';    // rgb(179,212,252)

    /**
     * @var string $FontFamily
     *   Name of the active font family.  Defaults to 'Roboto' for the default
     *   font in Material Design and Android.
     */
    protected $FontFamily = 'Roboto';

    /**
     * @var array $FontStacks
     *   Array consisting of font family names and font stacks for the CSS
     *   `font-family` property.  A string value is used for a single font
     *   stack; an array value is used if the font stack for headings in the
     *   first array element differs from the font stack for plain text in the
     *   second array element.
     */
    protected $FontStacks = array(
        'Arial' => 'Arial,"Helvetica Neue",Helvetica,sans-serif',
        'Droid' => array('"Droid Sans","Helvetica Neue",Arial,sans-serif', '"Droid Serif",Georgia,"Times New Roman",serif'),
        'Droid Sans' => '"Droid Sans",Roboto,"Helvetica Neue",Arial,sans-serif',
        'Droid Serif' => '"Droid Serif",Georgia,"Times New Roman",serif',
        'Fira Sans' => '"Fira Sans",Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Fira Sans Cyrillic' => '"Fira Sans",Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Fira Sans Latin Extended' => '"Fira Sans",Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Georgia' => 'Georgia,Constantia,"Lucida Bright",Lucidabright,"Lucida Serif",Lucida,"DejaVu Serif","Bitstream Vera Serif","Liberation Serif",serif',
        'Helvetica' => 'Helvetica,"Helvetica Neue",Arial,sans-serif',
        'Helvetica Neue' => '"Helvetica Neue",Helvetica,Arial,sans-serif',
        'Istok Web' => '"Istok Web",Frutiger,"Frutiger Linotype","Myriad Pro",Myriad,Calibri,sans-serif',
        'Lato' => 'Lato,"Gill Sans","Helvetica Neue",Arial,sans-serif',
        'Merriweather' => 'Georgia,Constantia,"Lucida Bright",Lucidabright,"Lucida Serif",Lucida,"DejaVu Serif","Bitstream Vera Serif","Liberation Serif",serif',
        'Merriweather Cyrillic' => 'Georgia,Constantia,"Lucida Bright",Lucidabright,"Lucida Serif",Lucida,"DejaVu Serif","Bitstream Vera Serif","Liberation Serif",serif',
        'Merriweather Latin Extended' => 'Georgia,Constantia,"Lucida Bright",Lucidabright,"Lucida Serif",Lucida,"DejaVu Serif","Bitstream Vera Serif","Liberation Serif",serif',
        'Montserrat' => 'Montserrat,"Open Sans","Helvetica Neue",Arial,sans-serif',
        'Nunito' => 'Nunito,"Arial Rounded MT","Arial Rounded",Arial,sans-serif',
        'Open Sans' => '"Open Sans","Helvetica Neue",Arial,sans-serif',
        'Oxygen' => 'Oxygen,Roboto,"Droid Sans",Ubuntu,"San Francisco","Helvetica Neue",Arial,sans-serif',
        'PT Sans' => '"PT Sans","Myriad Pro",Myriad,sans-serif',
        'PT Sans Cyrillic' => '"PT Sans","Myriad Pro",Myriad,sans-serif',
        'PT Sans Latin Extended' => '"PT Sans","Myriad Pro",Myriad,sans-serif',
        'Raleway' => 'Raleway,Verdana,"Helvetica Neue",Arial,sans-serif',
        'Roboto' => 'Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Roboto Cyrillic' => 'Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Roboto Greek' => 'Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Roboto Latin Extended' => 'Roboto,"Droid Sans","San Francisco","Helvetica Neue",Arial,sans-serif',
        'Segoe UI' => '"Segoe UI","Segoe UI Web","Segoe UI Symbol","Helvetica Neue","BBAlpha Sans","S60 Sans",Arial,sans-serif',
        'Source Sans Pro' => '"Source Sans Pro",Roboto,"Helvetica Neue","Segoe UI",sans-serif',
        'Times New Roman' => 'TimesNewRoman,"Times New Roman",Times,serif',
        'Ubuntu' => 'Ubuntu,Corbel,"San Francisco",sans-serif',
        'Ubuntu Cyrillic' => 'Ubuntu,Corbel,"San Francisco",sans-serif',
        'Ubuntu Greek' => 'Ubuntu,Corbel,"San Francisco",sans-serif',
        'Ubuntu Latin Extended' => 'Ubuntu,Corbel,"San Francisco",sans-serif',
    );

    /**
     * @var array $FontLinks
     *   Links to external web fonts CSS for font families.  Currently only
     *   Google fonts are included due to limitations imposed on font loading
     *   by AMP.
     */
    protected $FontLinks = array(
        'Droid' => 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif',
        'Droid Sans' => 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700',
        'Droid Serif' => 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700',
        'Fira Sans' => 'https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700',
        'Fira Sans Cyrillic' => 'https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700&amp;subset=cyrillic,cyrillic-ext',
        'Fira Sans Latin Extended' => 'https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700&amp;subset=latin-ext',
        'Istok Web' => 'https://fonts.googleapis.com/css?family=Istok+Web:400,700',
        'Lato' => 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900',
        'Merriweather' => 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900',
        'Merriweather Cyrillic' => 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900&amp;subset=cyrillic,cyrillic-ext',
        'Merriweather Latin Extended' => 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900&amp;subset=latin-ext',
        'Montserrat' => 'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'Nunito' => 'https://fonts.googleapis.com/css?family=Nunito:300,400,700',
        'Open Sans' => 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800',
        'Oxygen' => 'https://fonts.googleapis.com/css?family=Oxygen:300,400,700',
        'PT Sans' => 'https://fonts.googleapis.com/css?family=PT+Sans:400,700',
        'PT Sans Cyrillic' => 'https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic,cyrillic-ext',
        'PT Sans Latin Extended' => 'https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin-ext',
        'Raleway' => 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,700',
        'Roboto' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
        'Roboto Cyrillic' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic,cyrillic-ext',
        'Roboto Greek' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=greek,greek-ext',
        'Roboto Latin Extended' => 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=latin-ext',
        'Source Sans Pro' => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700',
        'Ubuntu' => 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700',
        'Ubuntu Cyrillic' => 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic,cyrillic-ext',
        'Ubuntu Greek' => 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=greek,greek-ext',
        'Ubuntu Latin Extended' => 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=latin-ext',
    );

    /**
     * @var array $MaterialDesignBlockElements
     *   In some cases, the default MDL stylesheets include duplicate CSS
     *   declarations for a single BEM (block-element-modifier) component, for
     *   example `.mdl-layout-title` as a block as well as `.mdl-layout__title`
     *   as an element within a block.  In these cases one syntax is preferred
     *   and the other one is dropped to minimize the CSS file size and
     *   complexity.  The key in this array is the needle and the value its
     *   replacement.
     */
    protected $MaterialDesignBlockElements = array(
        'mdl-layout-title' => 'mdl-layout__title',
        'mdl-mega-footer--bottom-section' => 'mdl-mega-footer__bottom-section',
        'mdl-mega-footer--drop-down-section' => 'mdl-mega-footer__drop-down-section',
        'mdl-mega-footer--left-section' => 'mdl-mega-footer__left-section',
        'mdl-mega-footer--link-list' => 'mdl-mega-footer__link-list',
        'mdl-mega-footer--heading-checkbox' => 'mdl-mega-footer__heading-checkbox',
        'mdl-mega-footer--heading' => 'mdl-mega-footer__heading',
        'mdl-mega-footer--middle-section' => 'mdl-mega-footer__middle-section',
        'mdl-mega-footer--right-section' => 'mdl-mega-footer__right-section',
        'mdl-mega-footer--social-btn' => 'mdl-mega-footer__social-btn',
        'mdl-mega-footer--top-section' => 'mdl-mega-footer__top-section',
        'mdl-mini-footer--left-section' => 'mdl-mini-footer__left-section',
        'mdl-mini-footer--link-list' => 'mdl-mini-footer__link-list',
        'mdl-mini-footer--right-section' => 'mdl-mini-footer__right-section',
        'mdl-mini-footer--social-btn' => 'mdl-mini-footer__social-btn',
    );

    /**
     * @var array
     *   Array of MDL components to include in the CSS stylesheet.  The parse()
     *   method may be used to check if some HTML includes one of these
     *   components and set its inclusion switch to true.  Components may also
     *   be enabled manually with the enable() method.
     */
    protected $MaterialDesignComponents = array(
        'blockquote' => false,
        'mdl-animation' => false,
        'mdl-badge' => false,
        'mdl-button' => false,
        'mdl-card' => false,
        'mdl-checkbox' => false,
        'mdl-chip' => false,
        'mdl-data-table' => false,
        'mdl-dialog' => false,
        'mdl-grid' => false,
        'mdl-icon-toggle' => false,
        'mdl-layout' => false,
        'mdl-list' => false,
        'mdl-logo' => false,
        'mdl-menu' => false,
        'mdl-mega-footer' => false,
        'mdl-mini-footer' => false,
        'mdl-navigation' => false,
        'mdl-progress' => false,
        'mdl-radio' => false,
        'mdl-ripple' => false,
        'mdl-shadow' => false,
        'mdl-slider' => false,
        'mdl-snackbar' => false,
        'mdl-spinner' => false,
        'mdl-switch' => false,
        'mdl-tabs' => false,
        'mdl-textfield' => false,
        'mdl-tooltip' => false,
        'mdl-typography' => false,
    );

    /**
     * @var array $MaterialDesignReplacements
     *   Array with shorthand replacements for BEM (block-element-modifier)
     *   CSS selectors.  Note that all selectors start with `.mdl-` for MDL
     *   (Material Design Lite) and `.m` for their shorthand counterparts:
     *   therefore its best not to use these prefixes in selectors for custom
     *   templates and proprietary CSS class names.
     */
    protected $MaterialDesignReplacements = array(

        'mdl-accordion' => 'mac',

        'mdl-animation' => 'man',

        'mdl-badge--no-background' => 'mbanb',
        'mdl-badge--overlap'       => 'mbao',
        'mdl-badge'                => 'mba',

        'mdl-button--accent'           => 'mbua',
        'mdl-button--colored'          => 'mbuc',
        'mdl-button--fab'              => 'mbuf',
        'mdl-button--mini-icon'        => 'mbum',
        'mdl-button--primary'          => 'mbup',
        'mdl-button--raised'           => 'mbur',
        'mdl-button__ripple-container' => 'mburc',
        'mdl-button--'                 => 'mbu-',
        'mdl-button'                   => 'mbu',

        'mdl-cell--order-' => 'mco',
        'mdl-cell--'       => 'mc-',
        'mdl-cell'         => 'mc',
        '-col-desktop'     => '-cd',
        '-col-phone'       => '-cp',
        '-col-tablet'      => '-ct',
        '-offset-desktop'  => '-od',
        '-offset-phone'    => '-op',
        '-offset-tablet'   => '-ot',

        'mdl-card__actions'         => 'mcaa',
        'mdl-card--expand'          => 'mcae',
        'mdl-card__title-text'      => 'mcatt',
        'mdl-card__title'           => 'mcat',
        'mdl-card__media'           => 'mcame',
        'mdl-card__menu'            => 'mcamn',
        'mdl-card__subtitle-text'   => 'mcastt',
        'mdl-card__supporting-text' => 'mcasut',
        'mdl-card'                  => 'mca',

        'mdl-checkbox__box-outline'      => 'mcbbo',
        'mdl-checkbox__focus-helper'     => 'mcbfh',
        'mdl-checkbox__input'            => 'mcbi',
        'mdl-checkbox__label'            => 'mcbl',
        'mdl-checkbox__tick-outline'     => 'mcbto',
        'mdl-checkbox__ripple-container' => 'mcbrc',
        'mdl-checkbox'                   => 'mcb',

        'mdl-chip__action'  => 'mcha',
        'mdl-chip__contact' => 'mchc',
        'mdl-chip__text'    => 'mcht',
        'mdl-chip'          => 'mch',

        'mdl-color'      => 'mcl',
        'mdl-color-text' => 'mclt',

        'mdl-data-table__header--sorted-ascending'  => 'mdtha',
        'mdl-data-table__header--sorted-descending' => 'mdthd',
        'mdl-data-table__cell--non-numeric'         => 'mdtnn',
        'mdl-data-table__select'                    => 'mdts',
        'mdl-data-table'                            => 'mdt',

        'mdl-dialog__actions--full-width' => 'mdgafw',
        'mdl-dialog__actions'             => 'mdga',
        'mdl-dialog__content'             => 'mdgc',
        'mdl-dialog__title'               => 'mdgt',
        'mdl-dialog'                      => 'mdg',

        'mdl-dropdown-menu' => 'mdm',

        'mdl-grid--no-spacing' => 'mgns',
        'mdl-grid'             => 'mg',

        'mdl-icon-toggle__input'            => 'miti',
        'mdl-icon-toggle__label'            => 'mitl',
        'mdl-icon-toggle__ripple-container' => 'mitrc',
        'mdl-icon-toggle'                   => 'mit',

        'mdl-item' => 'mi',

        'mdl-layout__container'                => 'mlcr',
        'mdl-layout__content'                  => 'mlc',
        'mdl-layout__drawer-button'            => 'mldb',
        'mdl-layout__drawer'                   => 'mld',
        'mdl-layout__header-row'               => 'mlhr',
        'mdl-layout__header--scroll'           => 'mlhr',
        'mdl-layout__header--waterfall'        => 'mlhw',
        'mdl-layout__header'                   => 'mlh',
        'mdl-layout--no-desktop-drawer-button' => 'mlnddb',
        'mdl-layout__tab-bar-button'           => 'mltbb',
        'mdl-layout__tab-bar-left-button'      => 'mltblb',
        'mdl-layout__tab-bar-right-button'     => 'mltbrb',
        'mdl-layout__tab-bar'                  => 'mltb',
        'mdl-layout__tab'                      => 'mlt',
        'mdl-layout__tab-ripple-container'     => 'mltrc',
        'mdl-layout__title'                    => 'mlti',
        'mdl-layout'                           => 'ml',

        'mdl-list__item-avatar'            => 'mlii',
        'mdl-list__item-icon'              => 'mlii',
        'mdl-list__item-primary-content'   => 'mlipc',
        'mdl-list__item-secondary-action'  => 'mlisa',
        'mdl-list__item-secondary-info'    => 'mlisi',
        'mdl-list__item-secondary-content' => 'mlisc',
        'mdl-list__item-sub-header'        => 'mlish',
        'mdl-list__item--three-line'       => 'mli3',
        'mdl-list__item--two-line'         => 'mli2',
        'mdl-list__item'                   => 'mli',
        'mdl-list'                         => 'mlst',

        'mdl-logo' => 'mlo',

        'mdl-mega-footer__bottom-section'    => 'megbs',
        'mdl-mega-footer__drop-down-section' => 'megdds',
        'mdl-mega-footer__heading-checkbox'  => 'meghc',
        'mdl-mega-footer__heading'           => 'megh',
        'mdl-mega-footer__left-section'      => 'megls',
        'mdl-mega-footer__link-list'         => 'megll',
        'mdl-mega-footer__middle-section'    => 'megms',
        'mdl-mega-footer__right-section'     => 'megrs',
        'mdl-mega-footer__social-btn'        => 'megsb',
        'mdl-mega-footer__top-section'       => 'megts',
        'mdl-mega-footer'                    => 'meg',

        'mdl-menu--bottom-right'           => 'mmbr',
        'mdl-menu--top-left'               => 'mmtl',
        'mdl-menu--top-right'              => 'mmtr',
        'mdl-menu__container'              => 'mmc',
        'mdl-menu__item--ripple-container' => 'mmirc',
        'mdl-menu__item'                   => 'mmi',
        'mdl-menu__outline'                => 'mmo',
        'mdl-menu'                         => 'mm',

        'mdl-mini-footer__left-section'  => 'minls',
        'mdl-mini-footer__link-list'     => 'minll',
        'mdl-mini-footer__right-section' => 'minrs',
        'mdl-mini-footer__social-btn'    => 'minsb',
        'mdl-mini-footer'                => 'min',

        'mdl-navigation__link' => 'mnl',
        'mdl-navigation'       => 'mn',

        'mdl-progress' => 'mp',

        'mdl-radio__inner-circle'     => 'mric',
        'mdl-radio__label'            => 'mrl',
        'mdl-radio__outer-circle'     => 'mroc',
        'mdl-radio__ripple-container' => 'mrrc',
        'mdl-radio' => 'mr',

        'mdl-ripple' => 'mri',

        'mdl-slider' => 'msl',

        'mdl-snackbar__action' => 'msna',
        'mdl-snackbar__text'   => 'msnt',
        'mdl-snackbar'         => 'msn',

        'mdl-shadow--' => 'msh',

        'mdl-spinner__circle-clipper' => 'mspcc',
        'mdl-spinner__circle'         => 'mspc',
        'mdl-spinner__gap-patch'      => 'mspgp',
        'mdl-spinner__layer'          => 'msplr',
        'mdl-spinner__left'           => 'mspl',
        'mdl-spinner__right'          => 'mspr',
        'mdl-spinner--single-color'   => 'mspsc',
        'mdl-spinner'                 => 'msp',

        'mdl-switch__focus-helper'     => 'mswf',
        'mdl-switch__label'            => 'mswl',
        'mdl-switch__ripple-container' => 'mswr',
        'mdl-switch__thumb'            => 'mswth',
        'mdl-switch__track'            => 'mswtr',
        'mdl-switch'                   => 'msw',

        'mdl-tabs__panel'            => 'mtap',
        'mdl-tabs__ripple-container' => 'mtar',
        'mdl-tabs__tab-bar'          => 'mtatb',
        'mdl-tabs__tab'              => 'mtat',
        'mdl-tabs'                   => 'mta',

        'mdl-textfield--align-right'       => 'mtxar',
        'mdl-textfield__expandable-holder' => 'mtxeh',
        'mdl-textfield--expandable'        => 'mtxe',
        'mdl-textfield--floating-label'    => 'mtxfl',
        'mdl-textfield--full-width'        => 'mtxfw',
        'mdl-textfield__input'             => 'mtxi',
        'mdl-textfield__label'             => 'mtxl',
        'mdl-textfield'                    => 'mtx',

        'mdl-tooltip--large' => 'mttl',
        'mdl-tooltip'        => 'mtt',

        'mdl-typography--body'     => 'mtybo',
        'mdl-typography--button'   => 'mtybu',
        'mdl-typography--caption'  => 'mtyc',
        'mdl-typography--display'  => 'mtyd',
        'mdl-typography--font'     => 'mtyf',
        'mdl-typography--headline' => 'mtyh',
        'mdl-typography--menu'     => 'mtym',
        'mdl-typography--subhead'  => 'mtys',
        'mdl-typography--text'     => 'mtyte',
        'mdl-typography--title'    => 'mtyti',
        'mdl-typography'           => 'mty',
        '-color-contrast'          => '-cc',
        '-force-preferred-font'    => '-fpp',
    );

    /**
     * @var bool $Minify
     *   Minify CSS and CSS in HTML (true) or not (default false)
     */
    protected $Minify = false;

    /**
     * @var array $Overrides
     *   CSS changes and additions, included at the end of the CSS stylesheet.
     */
    protected $Overrides = '';

    /**
     * Get or set a color.
     *
     * @param string $name
     * @param array $arguments
     * @return string|true
     * @throws \BadMethodCallException
     */
    public function __call($name, $arguments)
    {
        if (substr($name, -5) == 'Color') {
            $property = substr($name, 3);
            if (isset( $this->$property) ) {
                if (substr($name, 0, 3) == 'get') {
                    return $this->$property;
                } elseif (substr($name, 0, 3) == 'set') {
                    $this->$property = $arguments[0];
                    return true;
                }
            }
        }

        throw new \BadMethodCallException();
    }

    /**
     * Get a Material Design Lite (MDL) CSS stylesheet.
     *
     * @param void
     * @return string
     */
    public function __toString()
    {
        $font_family = $this->getFontFamily();

        if (array_key_exists($font_family, $this->FontStacks)) {
            if (is_array($this->FontStacks[$font_family])) {
                $font_family_headings = $this->FontStacks[$font_family][0];
                $font_family = $this->FontStacks[$font_family][1];
            } else {
                $font_family = $this->FontStacks[$font_family];
            }
        } elseif (preg_match('/\s/', $font_family) == 1) {
            $font_family = '"' . $font_family . '"';
        }

        if (!isset($font_family_headings)) {
            $font_family_headings = $font_family;
        }

        $return = <<<MDL_PREPEND

html{color:#212121;color:$this->PrimaryTextColor}
::-moz-selection{background:$this->SelectionBackgroundColor;text-shadow:none}::selection{background:$this->SelectionBackgroundColor;text-shadow:none}
hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}
audio,canvas,iframe,img,svg,video{vertical-align:middle}
fieldset{border:0;margin:0;padding:0}
textarea{resize:vertical}

a,.mdl-accordion,.mdl-button,.mdl-card,.mdl-checkbox,.mdl-dropdown-menu,.mdl-icon-toggle,.mdl-item,.mdl-radio,.mdl-slider,.mdl-switch,.mdl-tabs__tab{-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:rgba(255,255,255,0)}
html{width:100%;height:100%;-ms-touch-action:manipulation;touch-action:manipulation}
body{width:100%;min-height:100%;margin:0}
main{display:block}
*[hidden]{display:none!important}
html,body{font-family:$font_family;font-size:14px;font-weight:400;line-height:20px}
h1,h2,h3,h4{font-family:$font_family_headings;font-weight:400}
h1,h2,h3,h4,p{padding:0}
h1 small,h2 small,h3 small,h4 small{font-family:$font_family_headings;font-weight:400;line-height:1.35;letter-spacing:-.02em;opacity:.54;font-size:.6em}
h1{font-size:56px;line-height:1.35;letter-spacing:-.02em;margin:24px 0}
h2{font-size:45px;line-height:48px}
h2,h3{margin:24px 0}
h3{font-size:34px;line-height:40px}
h4{font-size:24px;line-height:32px;-moz-osx-font-smoothing:grayscale;margin:24px 0 16px}
p{font-weight:400;line-height:24px}
p{font-size:14px;letter-spacing:0;margin:0 0 16px}
a{color:$this->LinkColor;font-weight:500}

mark{background-color:$this->MarkBackgroundColor}
dt{font-weight:700}
address{font-size:12px;line-height:1;font-style:normal}
address,ol,ul{font-weight:400;letter-spacing:0}
ol,ul{font-size:14px;line-height:24px}

.material-icons{font-family:'Material Icons';font-weight:400;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;word-wrap:normal;-moz-font-feature-settings:'liga';font-feature-settings:'liga';-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased}

MDL_PREPEND;

        if ($this->MaterialDesignComponents['blockquote']) {
            $return .= <<<BLOCKQUOTE
blockquote{font-family:$font_family;position:relative;font-size:24px;font-weight:300;font-style:italic;line-height:1.35;letter-spacing:.08em}
blockquote:before{position:absolute;left:-.5em;content:'“'}
blockquote:after{content:'”';margin-left:-.05em}
BLOCKQUOTE;
        }

        if ($this->MaterialDesignComponents['mdl-typography']) {
            $return .= <<<MDL_TYPOGRAPHY
.mdl-typography--display-4,.mdl-typography--display-4-color-contrast{font-family:$font_family_headings;font-size:112px;font-weight:300;line-height:1;letter-spacing:-.04em}
.mdl-typography--display-3,.mdl-typography--display-3-color-contrast{font-family:$font_family_headings;font-size:56px;font-weight:400;line-height:1.35;letter-spacing:-.02em}
.mdl-typography--display-2,.mdl-typography--display-2-color-contrast{font-family:$font_family_headings;font-size:45px;font-weight:400;line-height:48px}
.mdl-typography--display-1,.mdl-typography--display-1-color-contrast{font-family:$font_family_headings;font-size:34px;font-weight:400;line-height:40px}
.mdl-typography--display-4-color-contrast,.mdl-typography--display-3-color-contrast,.mdl-typography--display-2-color-contrast,.mdl-typography--display-1-color-contrast{opacity:.54}
.mdl-typography--headline,.mdl-typography--headline-color-contrast{font-family:$font_family_headings;font-size:24px;font-weight:400;line-height:32px;-moz-osx-font-smoothing:grayscale}
.mdl-typography--title,.mdl-typography--title-color-contrast{font-family:$font_family_headings;font-size:20px;font-weight:500;line-height:1;letter-spacing:.02em}
.mdl-typography--subhead,.mdl-typography--subhead-color-contrast{font-family:$font_family_headings;font-size:16px;font-weight:400;line-height:24px;letter-spacing:.04em}
.mdl-typography--body-2,.mdl-typography--body-2-color-contrast{font-size:14px;font-weight:700;line-height:24px;letter-spacing:0}
.mdl-typography--body-1,.mdl-typography--body-1-color-contrast{font-size:14px;font-weight:400;line-height:24px;letter-spacing:0}
.mdl-typography--body-2-force-preferred-font,.mdl-typography--body-2-force-preferred-font-color-contrast{font-family:$font_family;font-size:14px;font-weight:500;line-height:24px;letter-spacing:0}
.mdl-typography--body-1-force-preferred-font,.mdl-typography--body-1-force-preferred-font-color-contrast{font-family:$font_family;font-size:14px;font-weight:400;line-height:24px;letter-spacing:0}
.mdl-typography--caption,.mdl-typography--caption-force-preferred-font{font-size:12px;font-weight:400;line-height:1;letter-spacing:0}
.mdl-typography--caption-force-preferred-font{font-family:$font_family_headings}
.mdl-typography--caption-color-contrast,.mdl-typography--caption-force-preferred-font-color-contrast{font-size:12px;font-weight:400;line-height:1;letter-spacing:0;opacity:.54}
.mdl-typography--caption-force-preferred-font-color-contrast,.mdl-typography--menu{font-family:$font_family_headings}
.mdl-typography--menu{font-size:14px;font-weight:500;line-height:1;letter-spacing:0}
.mdl-typography--menu-color-contrast,.mdl-typography--button,.mdl-typography--button-color-contrast{font-family:$font_family_headings;font-size:14px;font-weight:500;line-height:1;letter-spacing:0}
.mdl-typography--button,.mdl-typography--button-color-contrast{text-transform:uppercase}
.mdl-typography--headline-color-contrast,.mdl-typography--title-color-contrast,.mdl-typography--subhead-color-contrast,.mdl-typography--body-2-color-contrast,.mdl-typography--body-1-color-contrast,.mdl-typography--body-2-force-preferred-font-color-contrast,.mdl-typography--body-1-force-preferred-font-color-contrast,.mdl-typography--menu-color-contrast,.mdl-typography--button-color-contrast{opacity:.87}
.mdl-typography--text-left{text-align:left}
.mdl-typography--text-right{text-align:right}
.mdl-typography--text-center{text-align:center}
.mdl-typography--text-justify{text-align:justify}
.mdl-typography--text-nowrap{white-space:nowrap}
.mdl-typography--text-lowercase{text-transform:lowercase}
.mdl-typography--text-uppercase{text-transform:uppercase}
.mdl-typography--text-capitalize{text-transform:capitalize}
.mdl-typography--font-thin{font-weight:200}
.mdl-typography--font-light{font-weight:300}
.mdl-typography--font-regular{font-weight:400}
.mdl-typography--font-medium{font-weight:500}
.mdl-typography--font-bold{font-weight:700}
.mdl-typography--font-black{font-weight:900}
MDL_TYPOGRAPHY;
        }

        if ($this->MaterialDesignComponents['mdl-ripple']) {
            $return .= <<<MDL_RIPPLE
.mdl-ripple{background:#000;border-radius:50%;height:50px;left:0;opacity:0;pointer-events:none;position:absolute;top:0;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:50px;overflow:hidden}
.mdl-ripple.is-animating{transition:transform .3s cubic-bezier(0,0,.2,1),width .3s cubic-bezier(0,0,.2,1),height .3s cubic-bezier(0,0,.2,1),opacity .6s cubic-bezier(0,0,.2,1);transition:transform .3s cubic-bezier(0,0,.2,1),width .3s cubic-bezier(0,0,.2,1),height .3s cubic-bezier(0,0,.2,1),opacity .6s cubic-bezier(0,0,.2,1),-webkit-transform .3s cubic-bezier(0,0,.2,1)}
.mdl-ripple.is-visible{opacity:.3}
MDL_RIPPLE;
        }

        if ($this->MaterialDesignComponents['mdl-animation']) {
            $return .= <<<MDL_ANIMATION
.mdl-animation--default,.mdl-animation--fast-out-slow-in{transition-timing-function:cubic-bezier(.4,0,.2,1)}
.mdl-animation--linear-out-slow-in{transition-timing-function:cubic-bezier(0,0,.2,1)}
.mdl-animation--fast-out-linear-in{transition-timing-function:cubic-bezier(.4,0,1,1)}
MDL_ANIMATION;
        }

        if ($this->MaterialDesignComponents['mdl-badge']) {
            $return .= <<<MDL_BADGE
.mdl-badge{position:relative;white-space:nowrap;margin-right:24px}
.mdl-badge:not([data-badge]){margin-right:auto}
.mdl-badge[data-badge]:after{content:attr(data-badge);display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;position:absolute;top:-11px;right:-24px;font-family:$font_family_headings;font-weight:600;font-size:12px;width:22px;height:22px;border-radius:50%;background:$this->BadgeBackGroundColor;color:#fff}
.mdl-button .mdl-badge[data-badge]:after{top:-10px;right:-5px}
.mdl-badge.mdl-badge--no-background[data-badge]:after{color:$this->BadgeBackGroundColor;background:rgba(255,255,255,.2);box-shadow:0 0 1px gray}
.mdl-badge.mdl-badge--overlap{margin-right:10px}
.mdl-badge.mdl-badge--overlap:after{right:-10px}
MDL_BADGE;
        }

        if ($this->MaterialDesignComponents['mdl-button']) {
            $return .= <<<MDL_BUTTON
.mdl-button{background:0 0;border:none;border-radius:2px;color:#000;position:relative;height:36px;margin:0;min-width:64px;padding:0 16px;display:inline-block;font-family:Roboto,"Helvetica Neue",Arial,sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;letter-spacing:0;overflow:hidden;will-change:box-shadow;transition:box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1);outline:none;cursor:pointer;text-decoration:none;text-align:center;line-height:36px;vertical-align:middle}
.mdl-button::-moz-focus-inner{border:0}
.mdl-button:hover{background-color:rgba(158,158,158,.2)}
.mdl-button:focus:not(:active){background-color:rgba(0,0,0,.12)}
.mdl-button:active{background-color:rgba(158,158,158,.4)}
.mdl-button.mdl-button--colored{color:#3f51b5}
.mdl-button.mdl-button--colored:focus:not(:active){background-color:rgba(0,0,0,.12)}
input.mdl-button[type="submit"]{-webkit-appearance:none}
.mdl-button--raised{background:rgba(158,158,158,.2);box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
.mdl-button--raised:active{box-shadow:0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12),0 2px 4px -1px rgba(0,0,0,.2);background-color:rgba(158,158,158,.4)}
.mdl-button--raised:focus:not(:active){box-shadow:0 0 8px rgba(0,0,0,.18),0 8px 16px rgba(0,0,0,.36);background-color:rgba(158,158,158,.4)}
.mdl-button--raised.mdl-button--colored{background:#3f51b5;color:#fff}
.mdl-button--raised.mdl-button--colored:hover{background-color:#3f51b5}
.mdl-button--raised.mdl-button--colored:active{background-color:#3f51b5}
.mdl-button--raised.mdl-button--colored:focus:not(:active){background-color:#3f51b5}
.mdl-button--raised.mdl-button--colored .mdl-ripple{background:#fff}
.mdl-button--fab{border-radius:50%;font-size:24px;height:56px;margin:auto;min-width:56px;width:56px;padding:0;overflow:hidden;background:rgba(158,158,158,.2);box-shadow:0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24);position:relative;line-height:normal}
.mdl-button--fab .material-icons{position:absolute;top:50%;left:50%;-webkit-transform:translate(-12px,-12px);transform:translate(-12px,-12px);line-height:24px;width:24px}
.mdl-button--fab.mdl-button--mini-fab{height:40px;min-width:40px;width:40px}
.mdl-button--fab .mdl-button__ripple-container{border-radius:50%;-webkit-mask-image:-webkit-radial-gradient(circle,#fff,#000)}
.mdl-button--fab:active{box-shadow:0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12),0 2px 4px -1px rgba(0,0,0,.2);background-color:rgba(158,158,158,.4)}
.mdl-button--fab:focus:not(:active){box-shadow:0 0 8px rgba(0,0,0,.18),0 8px 16px rgba(0,0,0,.36);background-color:rgba(158,158,158,.4)}
.mdl-button--fab.mdl-button--colored{background:#ff4081;color:#fff}
.mdl-button--fab.mdl-button--colored:hover{background-color:#ff4081}
.mdl-button--fab.mdl-button--colored:focus:not(:active){background-color:#ff4081}
.mdl-button--fab.mdl-button--colored:active{background-color:#ff4081}
.mdl-button--fab.mdl-button--colored .mdl-ripple{background:#fff}
.mdl-button--icon{border-radius:50%;font-size:24px;height:32px;margin-left:0;margin-right:0;min-width:32px;width:32px;padding:0;overflow:hidden;color:inherit;line-height:normal}
.mdl-button--icon .material-icons{position:absolute;top:50%;left:50%;-webkit-transform:translate(-12px,-12px);transform:translate(-12px,-12px);line-height:24px;width:24px}
.mdl-button--icon.mdl-button--mini-icon{height:24px;min-width:24px;width:24px}
.mdl-button--icon.mdl-button--mini-icon .material-icons{top:0;left:0}
.mdl-button--icon .mdl-button__ripple-container{border-radius:50%;-webkit-mask-image:-webkit-radial-gradient(circle,#fff,#000)}
.mdl-button__ripple-container{display:block;height:100%;left:0;position:absolute;top:0;width:100%;z-index:0;overflow:hidden}
.mdl-button[disabled] .mdl-button__ripple-container .mdl-ripple,.mdl-button.mdl-button--disabled .mdl-button__ripple-container .mdl-ripple{background-color:transparent}
.mdl-button--primary.mdl-button--primary{color:#3f51b5}
.mdl-button--primary.mdl-button--primary .mdl-ripple{background:#fff}
.mdl-button--primary.mdl-button--primary.mdl-button--raised,.mdl-button--primary.mdl-button--primary.mdl-button--fab{color:#fff;background-color:#3f51b5}
.mdl-button--accent.mdl-button--accent{color:#ff4081}
.mdl-button--accent.mdl-button--accent .mdl-ripple{background:#fff}
.mdl-button--accent.mdl-button--accent.mdl-button--raised,.mdl-button--accent.mdl-button--accent.mdl-button--fab{color:#fff;background-color:#ff4081}
.mdl-button[disabled][disabled],.mdl-button.mdl-button--disabled.mdl-button--disabled{color:rgba(0,0,0,.26);cursor:default;background-color:transparent}
.mdl-button--fab[disabled][disabled],.mdl-button--fab.mdl-button--disabled.mdl-button--disabled{background-color:rgba(0,0,0,.12);color:rgba(0,0,0,.26)}
.mdl-button--raised[disabled][disabled],.mdl-button--raised.mdl-button--disabled.mdl-button--disabled{background-color:rgba(0,0,0,.12);color:rgba(0,0,0,.26);box-shadow:none}
.mdl-button--colored[disabled][disabled],.mdl-button--colored.mdl-button--disabled.mdl-button--disabled{color:rgba(0,0,0,.26)}
.mdl-button .material-icons{vertical-align:middle}
MDL_BUTTON;
        }

        if ($this->MaterialDesignComponents['mdl-card']) {
            $return .= <<<MDL_CARD
.mdl-card{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;font-size:16px;font-weight:400;min-height:200px;overflow:hidden;width:330px;z-index:1;position:relative;background:#fff;border-radius:2px;box-sizing:border-box}
.mdl-card__media{background-color:#ff4081;background-repeat:repeat;background-position:50% 50%;background-size:cover;background-origin:padding-box;background-attachment:scroll;box-sizing:border-box}
.mdl-card__title{-webkit-align-items:center;-ms-flex-align:center;align-items:center;color:#000;display:block;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-justify-content:stretch;-ms-flex-pack:stretch;justify-content:stretch;line-height:normal;padding:16px;-webkit-perspective-origin:165px 56px;perspective-origin:165px 56px;-webkit-transform-origin:165px 56px;transform-origin:165px 56px;box-sizing:border-box}
.mdl-card__title.mdl-card--border{border-bottom:1px solid rgba(0,0,0,.1)}
.mdl-card__title-text{-webkit-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end;color:inherit;display:block;display:-webkit-flex;display:-ms-flexbox;display:flex;font-size:24px;font-weight:300;line-height:normal;overflow:hidden;-webkit-transform-origin:149px 48px;transform-origin:149px 48px;margin:0}
.mdl-card__subtitle-text{font-size:14px;color:$this->SecondaryTextColor;margin:0}
.mdl-card__supporting-text{color:$this->SecondaryTextColor;font-size:1rem;line-height:18px;overflow:hidden;padding:16px;width:90%}
.mdl-card__actions{font-size:16px;line-height:normal;width:100%;background-color:transparent;padding:8px;box-sizing:border-box}
.mdl-card__actions.mdl-card--border{border-top:1px solid rgba(0,0,0,.1)}
.mdl-card--expand{-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1}
.mdl-card__menu{position:absolute;right:16px;top:16px}
MDL_CARD;
        }

        if ($this->MaterialDesignComponents['mdl-checkbox']) {
            $return .= <<<MDL_CHECKBOX
.mdl-checkbox{position:relative;z-index:1;vertical-align:middle;display:inline-block;box-sizing:border-box;width:100%;height:24px;margin:0;padding:0}
.mdl-checkbox.is-upgraded{padding-left:24px}
.mdl-checkbox__input{line-height:24px}
.mdl-checkbox.is-upgraded .mdl-checkbox__input{position:absolute;width:0;height:0;margin:0;padding:0;opacity:0;-ms-appearance:none;-moz-appearance:none;-webkit-appearance:none;appearance:none;border:none}
.mdl-checkbox__box-outline{position:absolute;top:3px;left:0;display:inline-block;box-sizing:border-box;width:16px;height:16px;margin:0;cursor:pointer;overflow:hidden;border:2px solid $this->SecondaryTextColor;border-radius:2px;z-index:2}
.mdl-checkbox.is-checked .mdl-checkbox__box-outline{border:2px solid #3f51b5}
fieldset[disabled] .mdl-checkbox .mdl-checkbox__box-outline,.mdl-checkbox.is-disabled .mdl-checkbox__box-outline{border:2px solid rgba(0,0,0,.26);cursor:auto}
.mdl-checkbox__focus-helper{position:absolute;top:3px;left:0;display:inline-block;box-sizing:border-box;width:16px;height:16px;border-radius:50%;background-color:transparent}
.mdl-checkbox.is-focused .mdl-checkbox__focus-helper{box-shadow:0 0 0 8px rgba(0,0,0,.1);background-color:rgba(0,0,0,.1)}
.mdl-checkbox.is-focused.is-checked .mdl-checkbox__focus-helper{box-shadow:0 0 0 8px rgba(63,81,181,.26);background-color:rgba(63,81,181,.26)}
.mdl-checkbox__tick-outline{position:absolute;top:0;left:0;height:100%;width:100%;-webkit-mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+CiAgICAgIDxwYXRoCiAgICAgICAgIGQ9Ik0gMCwwIDAsMSAxLDEgMSwwIDAsMCB6IE0gMC44NTM0Mzc1LDAuMTY3MTg3NSAwLjk1OTY4NzUsMC4yNzMxMjUgMC40MjkzNzUsMC44MDM0Mzc1IDAuMzIzMTI1LDAuOTA5Njg3NSAwLjIxNzE4NzUsMC44MDM0Mzc1IDAuMDQwMzEyNSwwLjYyNjg3NSAwLjE0NjU2MjUsMC41MjA2MjUgMC4zMjMxMjUsMC42OTc1IDAuODUzNDM3NSwwLjE2NzE4NzUgeiIKICAgICAgICAgc3R5bGU9ImZpbGw6I2ZmZmZmZjtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KICAgIDwvY2xpcFBhdGg+CiAgICA8bWFzayBpZD0ibWFzayIgbWFza1VuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgbWFza0NvbnRlbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giPgogICAgICA8cGF0aAogICAgICAgICBkPSJNIDAsMCAwLDEgMSwxIDEsMCAwLDAgeiBNIDAuODUzNDM3NSwwLjE2NzE4NzUgMC45NTk2ODc1LDAuMjczMTI1IDAuNDI5Mzc1LDAuODAzNDM3NSAwLjMyMzEyNSwwLjkwOTY4NzUgMC4yMTcxODc1LDAuODAzNDM3NSAwLjA0MDMxMjUsMC42MjY4NzUgMC4xNDY1NjI1LDAuNTIwNjI1IDAuMzIzMTI1LDAuNjk3NSAwLjg1MzQzNzUsMC4xNjcxODc1IHoiCiAgICAgICAgIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmUiIC8+CiAgICA8L21hc2s+CiAgPC9kZWZzPgogIDxyZWN0CiAgICAgd2lkdGg9IjEiCiAgICAgaGVpZ2h0PSIxIgogICAgIHg9IjAiCiAgICAgeT0iMCIKICAgICBjbGlwLXBhdGg9InVybCgjY2xpcCkiCiAgICAgc3R5bGU9ImZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KPC9zdmc+Cg==");mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+CiAgICAgIDxwYXRoCiAgICAgICAgIGQ9Ik0gMCwwIDAsMSAxLDEgMSwwIDAsMCB6IE0gMC44NTM0Mzc1LDAuMTY3MTg3NSAwLjk1OTY4NzUsMC4yNzMxMjUgMC40MjkzNzUsMC44MDM0Mzc1IDAuMzIzMTI1LDAuOTA5Njg3NSAwLjIxNzE4NzUsMC44MDM0Mzc1IDAuMDQwMzEyNSwwLjYyNjg3NSAwLjE0NjU2MjUsMC41MjA2MjUgMC4zMjMxMjUsMC42OTc1IDAuODUzNDM3NSwwLjE2NzE4NzUgeiIKICAgICAgICAgc3R5bGU9ImZpbGw6I2ZmZmZmZjtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KICAgIDwvY2xpcFBhdGg+CiAgICA8bWFzayBpZD0ibWFzayIgbWFza1VuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgbWFza0NvbnRlbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giPgogICAgICA8cGF0aAogICAgICAgICBkPSJNIDAsMCAwLDEgMSwxIDEsMCAwLDAgeiBNIDAuODUzNDM3NSwwLjE2NzE4NzUgMC45NTk2ODc1LDAuMjczMTI1IDAuNDI5Mzc1LDAuODAzNDM3NSAwLjMyMzEyNSwwLjkwOTY4NzUgMC4yMTcxODc1LDAuODAzNDM3NSAwLjA0MDMxMjUsMC42MjY4NzUgMC4xNDY1NjI1LDAuNTIwNjI1IDAuMzIzMTI1LDAuNjk3NSAwLjg1MzQzNzUsMC4xNjcxODc1IHoiCiAgICAgICAgIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmUiIC8+CiAgICA8L21hc2s+CiAgPC9kZWZzPgogIDxyZWN0CiAgICAgd2lkdGg9IjEiCiAgICAgaGVpZ2h0PSIxIgogICAgIHg9IjAiCiAgICAgeT0iMCIKICAgICBjbGlwLXBhdGg9InVybCgjY2xpcCkiCiAgICAgc3R5bGU9ImZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KPC9zdmc+Cg==");background:0 0;transition-duration:.28s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:background}
.mdl-checkbox.is-checked .mdl-checkbox__tick-outline{background:#3f51b5 url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8cGF0aAogICAgIGQ9Ik0gMC4wNDAzODA1OSwwLjYyNjc3NjcgMC4xNDY0NDY2MSwwLjUyMDcxMDY4IDAuNDI5Mjg5MzIsMC44MDM1NTMzOSAwLjMyMzIyMzMsMC45MDk2MTk0MSB6IE0gMC4yMTcxNTcyOSwwLjgwMzU1MzM5IDAuODUzNTUzMzksMC4xNjcxNTcyOSAwLjk1OTYxOTQxLDAuMjczMjIzMyAwLjMyMzIyMzMsMC45MDk2MTk0MSB6IgogICAgIGlkPSJyZWN0Mzc4MCIKICAgICBzdHlsZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO3N0cm9rZTpub25lIiAvPgo8L3N2Zz4K")}
fieldset[disabled] .mdl-checkbox.is-checked .mdl-checkbox__tick-outline,.mdl-checkbox.is-checked.is-disabled .mdl-checkbox__tick-outline{background:rgba(0,0,0,.26)url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8cGF0aAogICAgIGQ9Ik0gMC4wNDAzODA1OSwwLjYyNjc3NjcgMC4xNDY0NDY2MSwwLjUyMDcxMDY4IDAuNDI5Mjg5MzIsMC44MDM1NTMzOSAwLjMyMzIyMzMsMC45MDk2MTk0MSB6IE0gMC4yMTcxNTcyOSwwLjgwMzU1MzM5IDAuODUzNTUzMzksMC4xNjcxNTcyOSAwLjk1OTYxOTQxLDAuMjczMjIzMyAwLjMyMzIyMzMsMC45MDk2MTk0MSB6IgogICAgIGlkPSJyZWN0Mzc4MCIKICAgICBzdHlsZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO3N0cm9rZTpub25lIiAvPgo8L3N2Zz4K")}
.mdl-checkbox__label{position:relative;cursor:pointer;font-size:16px;line-height:24px;margin:0}
fieldset[disabled] .mdl-checkbox .mdl-checkbox__label,.mdl-checkbox.is-disabled .mdl-checkbox__label{color:rgba(0,0,0,.26);cursor:auto}
.mdl-checkbox__ripple-container{position:absolute;z-index:2;top:-6px;left:-10px;box-sizing:border-box;width:36px;height:36px;border-radius:50%;cursor:pointer;overflow:hidden;-webkit-mask-image:-webkit-radial-gradient(circle,#fff,#000)}
.mdl-checkbox__ripple-container .mdl-ripple{background:#3f51b5}
fieldset[disabled] .mdl-checkbox .mdl-checkbox__ripple-container,.mdl-checkbox.is-disabled .mdl-checkbox__ripple-container{cursor:auto}
fieldset[disabled] .mdl-checkbox .mdl-checkbox__ripple-container .mdl-ripple,.mdl-checkbox.is-disabled .mdl-checkbox__ripple-container .mdl-ripple{background:0 0}
MDL_CHECKBOX;
        }

        if ($this->MaterialDesignComponents['mdl-chip']) {
            $return .= <<<MDL_CHIP
.mdl-chip{height:32px;font-family:"Roboto","Helvetica","Arial",sans-serif;line-height:32px;padding:0 12px;border:0;border-radius:16px;background-color:#dedede;display:inline-block;color:$this->PrimaryTextColor;margin:2px 0;font-size:0;white-space:nowrap}
.mdl-chip__text{font-size:13px;vertical-align:middle;display:inline-block}
.mdl-chip__action{height:24px;width:24px;background:0 0;opacity:.54;cursor:pointer;padding:0;margin:0 0 0 4px;font-size:13px;text-decoration:none;color:$this->PrimaryTextColor;border:none;outline:none}
.mdl-chip__action,.mdl-chip__contact{display:inline-block;vertical-align:middle;overflow:hidden;text-align:center}
.mdl-chip__contact{height:32px;width:32px;border-radius:16px;margin-right:8px;font-size:18px;line-height:32px}
.mdl-chip:focus{outline:0;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
.mdl-chip:active{background-color:#d6d6d6}
.mdl-chip--deletable{padding-right:4px}
.mdl-chip--contact{padding-left:0}
MDL_CHIP;
        }

        if ($this->MaterialDesignComponents['mdl-data-table']) {
            $return .= <<<MDL_DATA_TABLE
.mdl-data-table{position:relative;border:1px solid rgba(0,0,0,.12);border-collapse:collapse;white-space:nowrap;font-size:13px;background-color:#fff}
.mdl-data-table thead{padding-bottom:3px}
.mdl-data-table thead .mdl-data-table__select{margin-top:0}
.mdl-data-table tbody tr{position:relative;height:48px;transition-duration:.28s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:background-color}
.mdl-data-table tbody tr.is-selected{background-color:#e0e0e0}
.mdl-data-table tbody tr:hover{background-color:#eee}
.mdl-data-table td{text-align:right}
.mdl-data-table th{padding:0 18px 12px 18px;text-align:right}
.mdl-data-table td:first-of-type,.mdl-data-table th:first-of-type{padding-left:24px}
.mdl-data-table td:last-of-type,.mdl-data-table th:last-of-type{padding-right:24px}
.mdl-data-table td{position:relative;height:48px;border-top:1px solid rgba(0,0,0,.12);border-bottom:1px solid rgba(0,0,0,.12);padding:12px 18px;box-sizing:border-box}
.mdl-data-table td,.mdl-data-table td .mdl-data-table__select{vertical-align:middle}
.mdl-data-table th{position:relative;vertical-align:bottom;text-overflow:ellipsis;font-weight:700;line-height:24px;letter-spacing:0;height:48px;font-size:12px;color:$this->SecondaryTextColor;padding-bottom:8px;box-sizing:border-box}
.mdl-data-table th.mdl-data-table__header--sorted-ascending,.mdl-data-table th.mdl-data-table__header--sorted-descending{color:$this->PrimaryTextColor}
.mdl-data-table th.mdl-data-table__header--sorted-ascending:before,.mdl-data-table th.mdl-data-table__header--sorted-descending:before{font-family:'Material Icons';font-weight:400;font-style:normal;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;word-wrap:normal;-moz-font-feature-settings:'liga';font-feature-settings:'liga';-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased;font-size:16px;content:"\e5d8";margin-right:5px;vertical-align:sub}
.mdl-data-table th.mdl-data-table__header--sorted-ascending:hover,.mdl-data-table th.mdl-data-table__header--sorted-descending:hover{cursor:pointer}
.mdl-data-table th.mdl-data-table__header--sorted-ascending:hover:before,.mdl-data-table th.mdl-data-table__header--sorted-descending:hover:before{color:rgba(0,0,0,.26)}
.mdl-data-table th.mdl-data-table__header--sorted-descending:before{content:"\e5db"}
.mdl-data-table__select{width:16px}
.mdl-data-table__cell--non-numeric.mdl-data-table__cell--non-numeric{text-align:left}
MDL_DATA_TABLE;
        }

        if ($this->MaterialDesignComponents['mdl-dialog']) {
            $return .= <<<MDL_DIALOG
.mdl-dialog{border:none;box-shadow:0 9px 46px 8px rgba(0,0,0,.14),0 11px 15px -7px rgba(0,0,0,.12),0 24px 38px 3px rgba(0,0,0,.2);width:280px}
.mdl-dialog__title{padding:24px 24px 0;margin:0;font-size:2.5rem}
.mdl-dialog__actions{padding:8px 8px 8px 24px;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}
.mdl-dialog__actions>*{margin-right:8px;height:36px}
.mdl-dialog__actions>*:first-child{margin-right:0}
.mdl-dialog__actions--full-width{padding:0 0 8px}
.mdl-dialog__actions--full-width>*{height:48px;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;padding-right:16px;margin-right:0;text-align:right}
.mdl-dialog__content{padding:20px 24px 24px;color:$this->SecondaryTextColor}
MDL_DIALOG;
        }

        if ($this->MaterialDesignComponents['mdl-mega-footer']) {
            $return .= <<<MDL_MEGA_FOOTER
.mdl-mega-footer{padding:16px 40px;color:#9e9e9e;background-color:#424242}
.mdl-mega-footer__top-section:after,.mdl-mega-footer__middle-section:after,.mdl-mega-footer__bottom-section:after{content:'';display:block;clear:both}
.mdl-mega-footer__left-section,.mdl-mega-footer__right-section{margin-bottom:16px}
.mdl-mega-footer__right-section a{display:block;margin-bottom:16px;color:inherit;text-decoration:none}
@media screen and (min-width:760px){
  .mdl-mega-footer__left-section{float:left}
  .mdl-mega-footer__right-section{float:right}
  .mdl-mega-footer__right-section a{display:inline-block;margin-left:16px;line-height:36px;vertical-align:middle}
}
.mdl-mega-footer__social-btn{width:36px;height:36px;padding:0;margin:0;background-color:#9e9e9e;border:none}
.mdl-mega-footer__drop-down-section{display:block;position:relative}
@media screen and (min-width:760px){
  .mdl-mega-footer__drop-down-section{width:33%}
  .mdl-mega-footer__drop-down-section:nth-child(1),.mdl-mega-footer__drop-down-section:nth-child(2){float:left}
  .mdl-mega-footer__drop-down-section:nth-child(3){float:right}
  .mdl-mega-footer__drop-down-section:nth-child(3):after{clear:right}
  .mdl-mega-footer__drop-down-section:nth-child(4){clear:right;float:right}
  .mdl-mega-footer__middle-section:after{content:'';display:block;clear:both}
  .mdl-mega-footer__bottom-section{padding-top:0}
}
@media screen and (min-width:1024px){.mdl-mega-footer__drop-down-section,.mdl-mega-footer__drop-down-section:nth-child(3),.mdl-mega-footer__drop-down-section:nth-child(4){width:24%;float:left}}
.mdl-mega-footer__heading-checkbox{position:absolute;width:100%;height:55.8px;padding:32px;margin:-16px 0 0;cursor:pointer;z-index:1;opacity:0}
.mdl-mega-footer__heading-checkbox+.mdl-mega-footer__heading:after{font-family:'Material Icons';content:'\E5CE'}
.mdl-mega-footer__heading-checkbox:checked~.mdl-mega-footer__link-list,.mdl-mega-footer__heading-checkbox:checked+.mdl-mega-footer__heading+.mdl-mega-footer__link-list{display:none}
.mdl-mega-footer__heading-checkbox:checked+.mdl-mega-footer__heading:after{font-family:'Material Icons';content:'\E5CF'}
.mdl-mega-footer__heading{position:relative;width:100%;padding-right:39.8px;margin-bottom:16px;box-sizing:border-box;font-size:14px;line-height:23.8px;font-weight:500;white-space:nowrap;text-overflow:ellipsis;overflow:hidden;color:#e0e0e0}
.mdl-mega-footer__heading:after{content:'';position:absolute;top:0;right:0;display:block;width:23.8px;height:23.8px;background-size:cover}
.mdl-mega-footer__link-list{list-style:none;padding:0;margin:0 0 32px}
.mdl-mega-footer__link-list:after{clear:both;display:block;content:''}
.mdl-mega-footer__link-list li{font-size:14px;font-weight:400;letter-spacing:0;line-height:20px}
.mdl-mega-footer__link-list a{color:inherit;text-decoration:none;white-space:nowrap}
@media screen and (min-width:760px){
  .mdl-mega-footer__heading-checkbox{display:none}
  .mdl-mega-footer__heading-checkbox+.mdl-mega-footer__heading:after{content:''}
  .mdl-mega-footer__heading-checkbox:checked~.mdl-mega-footer__link-list,.mdl-mega-footer__heading-checkbox:checked+.mdl-mega-footer__heading+.mdl-mega-footer__link-list{display:block}
  .mdl-mega-footer__heading-checkbox:checked+.mdl-mega-footer__heading:after{content:''}
}
.mdl-mega-footer__bottom-section{padding-top:16px;margin-bottom:16px}
.mdl-logo{margin-bottom:16px;color:#fff}
.mdl-mega-footer__bottom-section .mdl-mega-footer__link-list li{float:left;margin-bottom:0;margin-right:16px}
@media screen and (min-width:760px){.mdl-logo{float:left;margin-bottom:0;margin-right:16px}}
MDL_MEGA_FOOTER;
        }

        if ($this->MaterialDesignComponents['mdl-mini-footer']) {
            $return .= <<<MDL_MINI_FOOTER
.mdl-mini-footer{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-flow:row wrap;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding:32px 16px;color:#9e9e9e;background-color:#424242}
.mdl-mini-footer:after{content:'';display:block}
.mdl-mini-footer .mdl-logo{line-height:36px}
.mdl-mini-footer__link-list{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-flow:row nowrap;-ms-flex-flow:row nowrap;flex-flow:row nowrap;list-style:none;margin:0;padding:0}
.mdl-mini-footer__link-list li{margin-bottom:0;margin-right:16px}
@media screen and (min-width:760px){.mdl-mini-footer__link-list li{line-height:36px}}
.mdl-mini-footer__link-list a{color:inherit;text-decoration:none;white-space:nowrap}
.mdl-mini-footer__left-section{display:inline-block;-webkit-order:0;-ms-flex-order:0;order:0}
.mdl-mini-footer__right-section{display:inline-block;-webkit-order:1;-ms-flex-order:1;order:1}
.mdl-mini-footer__social-btn{width:36px;height:36px;padding:0;margin:0;background-color:#9e9e9e;border:none}
MDL_MINI_FOOTER;
        }

        if ($this->MaterialDesignComponents['mdl-icon-toggle']) {
            $return .= <<<MDL_ICON_TOGGLE
.mdl-icon-toggle{position:relative;z-index:1;vertical-align:middle;display:inline-block;height:32px;margin:0;padding:0}
.mdl-icon-toggle__input{line-height:32px}
.mdl-icon-toggle.is-upgraded .mdl-icon-toggle__input{position:absolute;width:0;height:0;margin:0;padding:0;opacity:0;-ms-appearance:none;-moz-appearance:none;-webkit-appearance:none;appearance:none;border:none}
.mdl-icon-toggle__label{display:inline-block;position:relative;cursor:pointer;height:32px;width:32px;min-width:32px;color:#616161;border-radius:50%;padding:0;margin-left:0;margin-right:0;text-align:center;background-color:transparent;will-change:background-color;transition:background-color .2s cubic-bezier(.4,0,.2,1),color .2s cubic-bezier(.4,0,.2,1)}
.mdl-icon-toggle__label.material-icons{line-height:32px;font-size:24px}
.mdl-icon-toggle.is-checked .mdl-icon-toggle__label{color:#3f51b5}
.mdl-icon-toggle.is-disabled .mdl-icon-toggle__label{color:rgba(0,0,0,.26);cursor:auto;transition:none}
.mdl-icon-toggle.is-focused .mdl-icon-toggle__label{background-color:rgba(0,0,0,.12)}
.mdl-icon-toggle.is-focused.is-checked .mdl-icon-toggle__label{background-color:rgba(63,81,181,.26)}
.mdl-icon-toggle__ripple-container{position:absolute;z-index:2;top:-2px;left:-2px;box-sizing:border-box;width:36px;height:36px;border-radius:50%;cursor:pointer;overflow:hidden;-webkit-mask-image:-webkit-radial-gradient(circle,#fff,#000)}
.mdl-icon-toggle__ripple-container .mdl-ripple{background:#616161}
.mdl-icon-toggle.is-disabled .mdl-icon-toggle__ripple-container{cursor:auto}
.mdl-icon-toggle.is-disabled .mdl-icon-toggle__ripple-container .mdl-ripple{background:0 0}
MDL_ICON_TOGGLE;
        }

        if ($this->MaterialDesignComponents['mdl-list']) {
            $return .= <<<MDL_LIST
.mdl-list{display:block;padding:8px 0;list-style:none}
.mdl-list__item{font-family:$font_family;font-size:16px;font-weight:400;letter-spacing:.04em;line-height:1;min-height:48px;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding:16px;cursor:default;color:$this->PrimaryTextColor;overflow:hidden}
.mdl-list__item,.mdl-list__item .mdl-list__item-primary-content{box-sizing:border-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center}
.mdl-list__item .mdl-list__item-primary-content{-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex-grow:2;-ms-flex-positive:2;flex-grow:2;text-decoration:none}
.mdl-list__item .mdl-list__item-primary-content .mdl-list__item-icon{margin-right:32px}
.mdl-list__item .mdl-list__item-primary-content .mdl-list__item-avatar{margin-right:16px}
.mdl-list__item .mdl-list__item-secondary-content{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-flow:column;-ms-flex-flow:column;flex-flow:column;-webkit-align-items:flex-end;-ms-flex-align:end;align-items:flex-end;margin-left:16px}
.mdl-list__item .mdl-list__item-secondary-content .mdl-list__item-secondary-action label{display:inline}
.mdl-list__item .mdl-list__item-secondary-content .mdl-list__item-secondary-info{font-size:12px;font-weight:400;line-height:1;letter-spacing:0;color:$this->SecondaryTextColor}
.mdl-list__item .mdl-list__item-secondary-content .mdl-list__item-sub-header{padding:0 0 0 16px}
.mdl-list__item-icon,.mdl-list__item-icon.material-icons{height:24px;width:24px;font-size:24px;box-sizing:border-box;color:#757575}
.mdl-list__item-avatar,.mdl-list__item-avatar.material-icons{height:40px;width:40px;box-sizing:border-box;border-radius:50%;background-color:#757575;font-size:40px;color:#fff}
.mdl-list__item--two-line{height:72px}
.mdl-list__item--two-line .mdl-list__item-primary-content{height:36px;line-height:20px;display:block}
.mdl-list__item--two-line .mdl-list__item-primary-content .mdl-list__item-avatar{float:left}
.mdl-list__item--two-line .mdl-list__item-primary-content .mdl-list__item-icon{float:left;margin-top:6px}
.mdl-list__item--two-line .mdl-list__item-primary-content .mdl-list__item-secondary-content{height:36px}
.mdl-list__item--two-line .mdl-list__item-primary-content .mdl-list__item-sub-title{font-size:14px;font-weight:400;letter-spacing:0;line-height:18px;color:$this->SecondaryTextColor;display:block;padding:0}
.mdl-list__item--three-line{height:88px}
.mdl-list__item--three-line .mdl-list__item-primary-content{height:52px;line-height:20px;display:block}
.mdl-list__item--three-line .mdl-list__item-primary-content .mdl-list__item-avatar,.mdl-list__item--three-line .mdl-list__item-primary-content .mdl-list__item-icon{float:left}
.mdl-list__item--three-line .mdl-list__item-secondary-content{height:52px}
.mdl-list__item--three-line .mdl-list__item-text-body{font-size:14px;font-weight:400;letter-spacing:0;line-height:18px;height:52px;color:$this->SecondaryTextColor;display:block;padding:0}
MDL_LIST;
        }

        if ($this->MaterialDesignComponents['mdl-menu']) {
            $return .= <<<MDL_MENU
.mdl-menu__container{display:block;margin:0;padding:0;border:none;position:absolute;overflow:visible;height:0;width:0;visibility:hidden;z-index:-1}
.mdl-menu__container.is-visible,.mdl-menu__container.is-animating{z-index:999;visibility:visible}
.mdl-menu__outline{display:block;background:#fff;margin:0;padding:0;border:none;border-radius:2px;position:absolute;top:0;left:0;overflow:hidden;opacity:0;-webkit-transform:scale(0);transform:scale(0);-webkit-transform-origin:0 0;transform-origin:0 0;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);will-change:transform;transition:transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);transition:transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1),-webkit-transform .3s cubic-bezier(.4,0,.2,1);z-index:-1}
.mdl-menu__container.is-visible .mdl-menu__outline{opacity:1;-webkit-transform:scale(1);transform:scale(1);z-index:999}
.mdl-menu__outline.mdl-menu--bottom-right{-webkit-transform-origin:100% 0;transform-origin:100% 0}
.mdl-menu__outline.mdl-menu--top-left{-webkit-transform-origin:0 100%;transform-origin:0 100%}
.mdl-menu__outline.mdl-menu--top-right{-webkit-transform-origin:100% 100%;transform-origin:100% 100%}
.mdl-menu{position:absolute;list-style:none;top:0;left:0;height:auto;width:auto;min-width:124px;padding:8px 0;margin:0;opacity:0;clip:rect(0 0 0 0);z-index:-1}
.mdl-menu__container.is-visible .mdl-menu{opacity:1;z-index:999}
.mdl-menu.is-animating{transition:opacity .2s cubic-bezier(.4,0,.2,1),clip .3s cubic-bezier(.4,0,.2,1)}
.mdl-menu.mdl-menu--bottom-right{left:auto;right:0}
.mdl-menu.mdl-menu--top-left{top:auto;bottom:0}
.mdl-menu.mdl-menu--top-right{top:auto;left:auto;bottom:0;right:0}
.mdl-menu.mdl-menu--unaligned{top:auto;left:auto}
.mdl-menu__item{display:block;border:none;color:$this->PrimaryTextColor;background-color:transparent;text-align:left;margin:0;padding:0 16px;outline-color:#bdbdbd;position:relative;overflow:hidden;font-size:14px;font-weight:400;letter-spacing:0;text-decoration:none;cursor:pointer;height:48px;line-height:48px;white-space:nowrap;opacity:0;transition:opacity .2s cubic-bezier(.4,0,.2,1);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.mdl-menu__container.is-visible .mdl-menu__item{opacity:1}
.mdl-menu__item::-moz-focus-inner{border:0}
.mdl-menu__item--full-bleed-divider{border-bottom:1px solid rgba(0,0,0,.12)}
.mdl-menu__item[disabled],.mdl-menu__item[data-mdl-disabled]{color:#bdbdbd;background-color:transparent;cursor:auto}
.mdl-menu__item[disabled]:hover,.mdl-menu__item[data-mdl-disabled]:hover{background-color:transparent}
.mdl-menu__item[disabled]:focus,.mdl-menu__item[data-mdl-disabled]:focus{background-color:transparent}
.mdl-menu__item[disabled] .mdl-ripple,.mdl-menu__item[data-mdl-disabled] .mdl-ripple{background:0 0}
.mdl-menu__item:hover{background-color:#eee}
.mdl-menu__item:focus{outline:none;background-color:#eee}
.mdl-menu__item:active{background-color:#e0e0e0}
.mdl-menu__item--ripple-container{display:block;height:100%;left:0;position:absolute;top:0;width:100%;z-index:0;overflow:hidden}
MDL_MENU;
        }

        if ($this->MaterialDesignComponents['mdl-progress']) {
            $return .= <<<MDL_PROGRESS
.mdl-progress{display:block;position:relative;height:4px;width:500px;max-width:100%}
.mdl-progress>.bar{display:block;position:absolute;top:0;bottom:0;width:0%;transition:width .2s cubic-bezier(.4,0,.2,1)}
.mdl-progress>.progressbar{background-color:#3f51b5;z-index:1;left:0}
.mdl-progress>.bufferbar{background-image:linear-gradient(to right,rgba(255,255,255,.7),rgba(255,255,255,.7)),linear-gradient(to right,#3f51b5 ,#3f51b5);z-index:0;left:0}
.mdl-progress>.auxbar{right:0}
@supports (-webkit-appearance:none){.mdl-progress:not(.mdl-progress--indeterminate):not(.mdl-progress--indeterminate)>.auxbar,.mdl-progress:not(.mdl-progress__indeterminate):not(.mdl-progress__indeterminate)>.auxbar{background-image:linear-gradient(to right,rgba(255,255,255,.7),rgba(255,255,255,.7)),linear-gradient(to right,#3f51b5 ,#3f51b5);-webkit-mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+Cjxzdmcgd2lkdGg9IjEyIiBoZWlnaHQ9IjQiIHZpZXdQb3J0PSIwIDAgMTIgNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxlbGxpcHNlIGN4PSIyIiBjeT0iMiIgcng9IjIiIHJ5PSIyIj4KICAgIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9ImN4IiBmcm9tPSIyIiB0bz0iLTEwIiBkdXI9IjAuNnMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiAvPgogIDwvZWxsaXBzZT4KICA8ZWxsaXBzZSBjeD0iMTQiIGN5PSIyIiByeD0iMiIgcnk9IjIiIGNsYXNzPSJsb2FkZXIiPgogICAgPGFuaW1hdGUgYXR0cmlidXRlTmFtZT0iY3giIGZyb209IjE0IiB0bz0iMiIgZHVyPSIwLjZzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgLz4KICA8L2VsbGlwc2U+Cjwvc3ZnPgo=");mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+Cjxzdmcgd2lkdGg9IjEyIiBoZWlnaHQ9IjQiIHZpZXdQb3J0PSIwIDAgMTIgNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxlbGxpcHNlIGN4PSIyIiBjeT0iMiIgcng9IjIiIHJ5PSIyIj4KICAgIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9ImN4IiBmcm9tPSIyIiB0bz0iLTEwIiBkdXI9IjAuNnMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiAvPgogIDwvZWxsaXBzZT4KICA8ZWxsaXBzZSBjeD0iMTQiIGN5PSIyIiByeD0iMiIgcnk9IjIiIGNsYXNzPSJsb2FkZXIiPgogICAgPGFuaW1hdGUgYXR0cmlidXRlTmFtZT0iY3giIGZyb209IjE0IiB0bz0iMiIgZHVyPSIwLjZzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgLz4KICA8L2VsbGlwc2U+Cjwvc3ZnPgo=")}}
.mdl-progress:not(.mdl-progress--indeterminate)>.auxbar,.mdl-progress:not(.mdl-progress__indeterminate)>.auxbar{background-image:linear-gradient(to right,rgba(255,255,255,.9),rgba(255,255,255,.9)),linear-gradient(to right,#3f51b5 ,#3f51b5)}
.mdl-progress.mdl-progress--indeterminate>.bar1,.mdl-progress.mdl-progress__indeterminate>.bar1{-webkit-animation-name:indeterminate1;animation-name:indeterminate1}
.mdl-progress.mdl-progress--indeterminate>.bar1,.mdl-progress.mdl-progress__indeterminate>.bar1,.mdl-progress.mdl-progress--indeterminate>.bar3,.mdl-progress.mdl-progress__indeterminate>.bar3{background-color:#3f51b5;-webkit-animation-duration:2s;animation-duration:2s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear}
.mdl-progress.mdl-progress--indeterminate>.bar3,.mdl-progress.mdl-progress__indeterminate>.bar3{background-image:none;-webkit-animation-name:indeterminate2;animation-name:indeterminate2}
@-webkit-keyframes indeterminate1{0%{left:0%;width:0%}50%{left:25%;width:75%}75%{left:100%;width:0%}}
@keyframes indeterminate1{0%{left:0%;width:0%}50%{left:25%;width:75%}75%{left:100%;width:0%}}
@-webkit-keyframes indeterminate2{0%,50%{left:0%;width:0%}75%{left:0%;width:25%}100%{left:100%;width:0%}}
@keyframes indeterminate2{0%,50%{left:0%;width:0%}75%{left:0%;width:25%}100%{left:100%;width:0%}}
MDL_PROGRESS;
        }

        if ($this->MaterialDesignComponents['mdl-navigation']) {
            $return .= <<<MDL_NAVIGATION
.mdl-navigation{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;box-sizing:border-box}
.mdl-navigation__link{color:#424242;text-decoration:none;margin:0;font-size:14px;font-weight:400;line-height:24px;letter-spacing:0;opacity:.87}
.mdl-navigation__link .material-icons{vertical-align:middle}
MDL_NAVIGATION;
        }

        if ($this->MaterialDesignComponents['mdl-layout']) {
            $return .= <<<MDL_LAYOUT
.mdl-layout{width:100%;height:100%;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;overflow-y:auto;overflow-x:hidden;position:relative;-webkit-overflow-scrolling:touch}
.mdl-layout.is-small-screen .mdl-layout--large-screen-only{display:none}
.mdl-layout:not(.is-small-screen) .mdl-layout--small-screen-only{display:none}
.mdl-layout__container{position:absolute;width:100%;height:100%}
.mdl-layout__title{display:block;position:relative;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:20px;line-height:1;letter-spacing:.02em;font-weight:400;box-sizing:border-box}
.mdl-layout-spacer{-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1}
.mdl-layout__drawer{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;width:240px;height:100%;max-height:100%;position:absolute;top:0;left:0;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);box-sizing:border-box;border-right:1px solid #e0e0e0;background:#fafafa;-webkit-transform:translateX(-250px);transform:translateX(-250px);-webkit-transform-style:preserve-3d;transform-style:preserve-3d;will-change:transform;transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:transform;transition-property:transform,-webkit-transform;color:#424242;overflow:visible;overflow-y:auto;z-index:5}
.mdl-layout__drawer.is-visible{-webkit-transform:translateX(0);transform:translateX(0)}
.mdl-layout__drawer.is-visible~.mdl-layout__content.mdl-layout__content{overflow:hidden}
.mdl-layout__drawer>*{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0}
.mdl-layout__drawer>.mdl-layout__title{line-height:64px;padding-left:40px}
.mdl-layout__drawer .mdl-navigation{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:stretch;-ms-flex-align:stretch;-ms-grid-row-align:stretch;align-items:stretch;padding-top:16px}
.mdl-layout__drawer .mdl-navigation .mdl-navigation__link{display:block;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;padding:16px 40px;margin:0;color:#757575}
.mdl-layout__drawer .mdl-navigation .mdl-navigation__link:hover{background-color:#e0e0e0}
.mdl-layout__drawer .mdl-navigation .mdl-navigation__link--current{background-color:#e0e0e0;color:#000}
.mdl-layout__drawer-button{display:block;position:absolute;height:48px;width:48px;border:0;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;overflow:hidden;text-align:center;cursor:pointer;font-size:26px;line-height:56px;font-family:Helvetica,Arial,sans-serif;margin:8px 12px;top:0;left:0;color:#fff;z-index:4}
.mdl-layout__header .mdl-layout__drawer-button{position:absolute;color:#fff;background-color:inherit}
.mdl-layout__header{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;box-sizing:border-box;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;margin:0;padding:0;border:none;min-height:64px;max-height:1000px;z-index:3;background-color:#3f51b5;color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:max-height,box-shadow}
.mdl-layout--fixed-drawer.is-upgraded:not(.is-small-screen)>.mdl-layout__header{margin-left:240px;width:calc(100% - 240px)}
.mdl-layout__header>.mdl-layout-icon{position:absolute;left:40px;top:16px;height:32px;width:32px;overflow:hidden;z-index:3;display:block}
.mdl-layout.has-drawer .mdl-layout__header>.mdl-layout-icon{display:none}
.mdl-layout__header.is-compact{max-height:64px}
.mdl-layout__header.is-compact.has-tabs{height:112px}
.mdl-layout__header--transparent.mdl-layout__header--transparent{background-color:transparent;box-shadow:none}
.mdl-layout__header--seamed,.mdl-layout__header--scroll{box-shadow:none}
.mdl-layout__header--waterfall{box-shadow:none;overflow:hidden}
.mdl-layout__header--waterfall.is-casting-shadow{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
.mdl-layout__header--waterfall.mdl-layout__header--waterfall-hide-top{-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}
.mdl-layout__header-row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;box-sizing:border-box;-webkit-align-self:stretch;-ms-flex-item-align:stretch;align-self:stretch;-webkit-align-items:center;-ms-flex-align:center;align-items:center;height:64px;margin:0;padding:0 40px 0 80px}
.mdl-layout--no-drawer-button .mdl-layout__header-row{padding-left:40px}
.mdl-layout__header-row>*{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0}
.mdl-layout__header--scroll .mdl-layout__header-row{width:100%}
.mdl-layout__header-row .mdl-navigation{margin:0;padding:0;height:64px;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-align-items:center;-ms-flex-align:center;-ms-grid-row-align:center;align-items:center}
.mdl-layout__header-row .mdl-navigation__link{display:block;color:#fff;line-height:64px;padding:0 24px}
.mdl-layout__obfuscator{background-color:transparent;position:absolute;top:0;left:0;height:100%;width:100%;z-index:4;visibility:hidden;transition-property:background-color;transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1)}
.mdl-layout__obfuscator.is-visible{background-color:rgba(0,0,0,.5);visibility:visible}
@supports (pointer-events:auto){
  .mdl-layout__obfuscator{background-color:rgba(0,0,0,.5);opacity:0;transition-property:opacity;visibility:visible;pointer-events:none}
  .mdl-layout__obfuscator.is-visible{pointer-events:auto;opacity:1}
}
.mdl-layout__content{-ms-flex:0 1 auto;position:relative;display:inline-block;overflow-y:auto;overflow-x:hidden;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;z-index:1;-webkit-overflow-scrolling:touch}
.mdl-layout--fixed-drawer>.mdl-layout__content{margin-left:240px}
.mdl-layout__container.has-scrolling-header .mdl-layout__content{overflow:visible}
.mdl-layout__tab-bar{height:96px;margin:0;width:calc(100% - 112px);padding:0 0 0 56px;display:-webkit-flex;display:-ms-flexbox;display:flex;background-color:#3f51b5;overflow-y:hidden;overflow-x:scroll}
.mdl-layout__tab-bar::-webkit-scrollbar{display:none}
.mdl-layout--no-drawer-button .mdl-layout__tab-bar{padding-left:16px;width:calc(100% - 32px)}

@media screen and (min-width:1025px){
  .mdl-layout--fixed-drawer>.mdl-layout__drawer{-webkit-transform:translateX(0);transform:translateX(0)}
  .mdl-layout__drawer-button{line-height:54px}
  .mdl-layout--no-desktop-drawer-button .mdl-layout__drawer-button,.mdl-layout--fixed-drawer>.mdl-layout__drawer-button,.mdl-layout--no-drawer-button .mdl-layout__drawer-button{display:none}
  .mdl-layout--fixed-drawer>.mdl-layout__header .mdl-layout__header-row{padding-left:40px}
  .mdl-layout--no-desktop-drawer-button .mdl-layout__header-row{padding-left:40px}
  .mdl-layout--no-desktop-drawer-button .mdl-layout__tab-bar{padding-left:16px;width:calc(100% - 32px)}
}

.mdl-layout--fixed-tabs .mdl-layout__tab-bar{padding:0;overflow:hidden;width:100%}
.mdl-layout__tab-bar-container{position:relative;height:48px;width:100%;border:none;margin:0;z-index:2;-webkit-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;overflow:hidden}
.mdl-layout__container>.mdl-layout__tab-bar-container{position:absolute;top:0;left:0}
.mdl-layout__tab-bar-button{display:inline-block;position:absolute;top:0;height:48px;width:56px;z-index:4;text-align:center;background-color:#3f51b5;color:transparent;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.mdl-layout--no-desktop-drawer-button .mdl-layout__tab-bar-button,.mdl-layout--no-drawer-button .mdl-layout__tab-bar-button{width:16px}
.mdl-layout--no-desktop-drawer-button .mdl-layout__tab-bar-button .material-icons,.mdl-layout--no-drawer-button .mdl-layout__tab-bar-button .material-icons{position:relative;left:-4px}
.mdl-layout--fixed-tabs .mdl-layout__tab-bar-button{display:none}
.mdl-layout__tab-bar-button .material-icons{line-height:48px}
.mdl-layout__tab-bar-button.is-active{color:#fff}
.mdl-layout__tab-bar-left-button{left:0}
.mdl-layout__tab-bar-right-button{right:0}
.mdl-layout__tab{margin:0;border:none;padding:0 24px;float:left;position:relative;display:block;-webkit-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;text-decoration:none;height:48px;line-height:48px;text-align:center;font-weight:500;font-size:14px;text-transform:uppercase;color:rgba(255,255,255,.6);overflow:hidden}
.mdl-layout--fixed-tabs .mdl-layout__tab{float:none;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;padding:0}
.mdl-layout.is-upgraded .mdl-layout__tab.is-active{color:#fff}
.mdl-layout.is-upgraded .mdl-layout__tab.is-active::after{height:2px;width:100%;display:block;content:" ";bottom:0;left:0;position:absolute;background:#ff4081;-webkit-animation:border-expand .2s cubic-bezier(.4,0,.4,1).01s alternate forwards;animation:border-expand .2s cubic-bezier(.4,0,.4,1).01s alternate forwards;transition:all 1s cubic-bezier(.4,0,1,1)}
.mdl-layout__tab .mdl-layout__tab-ripple-container{display:block;position:absolute;height:100%;width:100%;left:0;top:0;z-index:1;overflow:hidden}
.mdl-layout__tab .mdl-layout__tab-ripple-container .mdl-ripple{background-color:#fff}
.mdl-layout__tab-panel{display:block}
.mdl-layout.is-upgraded .mdl-layout__tab-panel{display:none}
.mdl-layout.is-upgraded .mdl-layout__tab-panel.is-active{display:block}

@media screen and (max-width:1024px){
  .mdl-layout__drawer>.mdl-layout__title{line-height:56px;padding-left:16px}
  .mdl-layout__drawer .mdl-navigation .mdl-navigation__link{padding:16px}
  .mdl-layout__header .mdl-layout__drawer-button{margin:4px}
  .mdl-layout__drawer-button{margin:4px;color:rgba(0,0,0,.5)}
  .mdl-layout__header{min-height:56px}
  .mdl-layout__header>.mdl-layout-icon{left:16px;top:12px}
  .mdl-layout__header.is-compact{max-height:56px}
  .mdl-layout__header.is-compact.has-tabs{min-height:104px}
  .mdl-layout__header{display:none}
  .mdl-layout--fixed-header>.mdl-layout__header{display:-webkit-flex;display:-ms-flexbox;display:flex}
  .mdl-layout__header-row{height:56px;padding:0 16px 0 72px}
  .mdl-layout--no-drawer-button .mdl-layout__header-row{padding-left:16px}
  .mdl-layout__header-row .mdl-navigation{height:56px}
  .mdl-layout__header-row .mdl-navigation__link{line-height:56px;padding:0 16px}
  .mdl-layout--fixed-drawer>.mdl-layout__content{margin-left:0}
  .mdl-layout__container.has-scrolling-header .mdl-layout__content{overflow-y:auto;overflow-x:hidden}
  .mdl-layout__tab-bar{width:calc(100% - 60px);padding:0 0 0 60px}
  .mdl-layout--no-drawer-button .mdl-layout__tab-bar{width:calc(100% - 8px);padding-left:4px}
  .mdl-layout__tab-bar-button{width:60px}
  .mdl-layout__tab{padding:0 12px}
}

MDL_LAYOUT;
        }

        if ($this->MaterialDesignComponents['mdl-radio']) {
            $return .= <<<MDL_RADIO
.mdl-radio{position:relative;font-size:16px;line-height:24px;display:inline-block;box-sizing:border-box;margin:0;padding-left:0}
.mdl-radio.is-upgraded{padding-left:24px}
.mdl-radio__button{line-height:24px}
.mdl-radio.is-upgraded .mdl-radio__button{position:absolute;width:0;height:0;margin:0;padding:0;opacity:0;-ms-appearance:none;-moz-appearance:none;-webkit-appearance:none;appearance:none;border:none}
.mdl-radio__outer-circle{position:absolute;top:4px;left:0;display:inline-block;box-sizing:border-box;width:16px;height:16px;margin:0;cursor:pointer;border:2px solid $this->SecondaryTextColor;border-radius:50%;z-index:2}
.mdl-radio.is-checked .mdl-radio__outer-circle{border:2px solid #3f51b5}
.mdl-radio__outer-circle fieldset[disabled] .mdl-radio,.mdl-radio.is-disabled .mdl-radio__outer-circle{border:2px solid rgba(0,0,0,.26);cursor:auto}
.mdl-radio__inner-circle{position:absolute;z-index:1;margin:0;top:8px;left:4px;box-sizing:border-box;width:8px;height:8px;cursor:pointer;transition-duration:.28s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:transform;transition-property:transform,-webkit-transform;-webkit-transform:scale3d(0,0,0);transform:scale3d(0,0,0);border-radius:50%;background:#3f51b5}
.mdl-radio.is-checked .mdl-radio__inner-circle{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}
fieldset[disabled] .mdl-radio .mdl-radio__inner-circle,.mdl-radio.is-disabled .mdl-radio__inner-circle{background:rgba(0,0,0,.26);cursor:auto}
.mdl-radio.is-focused .mdl-radio__inner-circle{box-shadow:0 0 0 10px rgba(0,0,0,.1)}
.mdl-radio__label{cursor:pointer}
fieldset[disabled] .mdl-radio .mdl-radio__label,.mdl-radio.is-disabled .mdl-radio__label{color:rgba(0,0,0,.26);cursor:auto}
.mdl-radio__ripple-container{position:absolute;z-index:2;top:-9px;left:-13px;box-sizing:border-box;width:42px;height:42px;border-radius:50%;cursor:pointer;overflow:hidden;-webkit-mask-image:-webkit-radial-gradient(circle,#fff,#000)}
.mdl-radio__ripple-container .mdl-ripple{background:#3f51b5}
fieldset[disabled] .mdl-radio .mdl-radio__ripple-container,.mdl-radio.is-disabled .mdl-radio__ripple-container{cursor:auto}
fieldset[disabled] .mdl-radio .mdl-radio__ripple-container .mdl-ripple,.mdl-radio.is-disabled .mdl-radio__ripple-container .mdl-ripple{background:0 0}
_:-ms-input-placeholder,:root .mdl-slider.mdl-slider.is-upgraded{-ms-appearance:none;height:32px;margin:0}
MDL_RADIO;
        }

        if ($this->MaterialDesignComponents['mdl-slider']) {
            $return .= <<<MDL_SLIDER
.mdl-slider{width:calc(100% - 40px);margin:0 20px}
.mdl-slider.is-upgraded{-webkit-appearance:none;-moz-appearance:none;appearance:none;height:2px;background:0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;outline:0;padding:0;color:#3f51b5;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center;z-index:1;cursor:pointer}
.mdl-slider.is-upgraded::-moz-focus-outer{border:0}
.mdl-slider.is-upgraded::-ms-tooltip{display:none}
.mdl-slider.is-upgraded::-webkit-slider-runnable-track{background:0 0}
.mdl-slider.is-upgraded::-moz-range-track{background:0 0;border:none}
.mdl-slider.is-upgraded::-ms-track{background:0 0;color:transparent;height:2px;width:100%;border:none}
.mdl-slider.is-upgraded::-ms-fill-lower{padding:0;background:linear-gradient(to right,transparent,transparent 16px,#3f51b5 16px,#3f51b5 0)}
.mdl-slider.is-upgraded::-ms-fill-upper{padding:0;background:linear-gradient(to left,transparent,transparent 16px,rgba(0,0,0,.26)16px,rgba(0,0,0,.26)0)}
.mdl-slider.is-upgraded::-webkit-slider-thumb{-webkit-appearance:none;width:12px;height:12px;box-sizing:border-box;border-radius:50%;background:#3f51b5;border:none;transition:transform .18s cubic-bezier(.4,0,.2,1),border .18s cubic-bezier(.4,0,.2,1),box-shadow .18s cubic-bezier(.4,0,.2,1),background .28s cubic-bezier(.4,0,.2,1);transition:transform .18s cubic-bezier(.4,0,.2,1),border .18s cubic-bezier(.4,0,.2,1),box-shadow .18s cubic-bezier(.4,0,.2,1),background .28s cubic-bezier(.4,0,.2,1),-webkit-transform .18s cubic-bezier(.4,0,.2,1)}
.mdl-slider.is-upgraded::-moz-range-thumb{-moz-appearance:none;width:12px;height:12px;box-sizing:border-box;border-radius:50%;background-image:none;background:#3f51b5;border:none}
.mdl-slider.is-upgraded:focus:not(:active)::-webkit-slider-thumb{box-shadow:0 0 0 10px rgba(63,81,181,.26)}
.mdl-slider.is-upgraded:focus:not(:active)::-moz-range-thumb{box-shadow:0 0 0 10px rgba(63,81,181,.26)}
.mdl-slider.is-upgraded:active::-webkit-slider-thumb{background-image:none;background:#3f51b5;-webkit-transform:scale(1.5);transform:scale(1.5)}
.mdl-slider.is-upgraded:active::-moz-range-thumb{background-image:none;background:#3f51b5;transform:scale(1.5)}
.mdl-slider.is-upgraded::-ms-thumb{width:32px;height:32px;border:none;border-radius:50%;background:#3f51b5;transform:scale(.375);transition:transform .18s cubic-bezier(.4,0,.2,1),background .28s cubic-bezier(.4,0,.2,1);transition:transform .18s cubic-bezier(.4,0,.2,1),background .28s cubic-bezier(.4,0,.2,1),-webkit-transform .18s cubic-bezier(.4,0,.2,1)}
.mdl-slider.is-upgraded:focus:not(:active)::-ms-thumb{background:radial-gradient(circle closest-side,#3f51b5 0%,#3f51b5 37.5%,rgba(63,81,181,.26)37.5%,rgba(63,81,181,.26)100%);transform:scale(1)}
.mdl-slider.is-upgraded:active::-ms-thumb{background:#3f51b5;transform:scale(.5625)}
.mdl-slider.is-upgraded.is-lowest-value::-webkit-slider-thumb{border:2px solid rgba(0,0,0,.26);background:0 0}
.mdl-slider.is-upgraded.is-lowest-value::-moz-range-thumb{border:2px solid rgba(0,0,0,.26);background:0 0}
.mdl-slider.is-upgraded.is-lowest-value+.mdl-slider__background-flex>.mdl-slider__background-upper{left:6px}
.mdl-slider.is-upgraded.is-lowest-value:focus:not(:active)::-webkit-slider-thumb{box-shadow:0 0 0 10px rgba(0,0,0,.12);background:rgba(0,0,0,.12)}
.mdl-slider.is-upgraded.is-lowest-value:focus:not(:active)::-moz-range-thumb{box-shadow:0 0 0 10px rgba(0,0,0,.12);background:rgba(0,0,0,.12)}
.mdl-slider.is-upgraded.is-lowest-value:active::-webkit-slider-thumb{border:1.6px solid rgba(0,0,0,.26);-webkit-transform:scale(1.5);transform:scale(1.5)}
.mdl-slider.is-upgraded.is-lowest-value:active+.mdl-slider__background-flex>.mdl-slider__background-upper{left:9px}
.mdl-slider.is-upgraded.is-lowest-value:active::-moz-range-thumb{border:1.5px solid rgba(0,0,0,.26);transform:scale(1.5)}
.mdl-slider.is-upgraded.is-lowest-value::-ms-thumb{background:radial-gradient(circle closest-side,transparent 0%,transparent 66.67%,rgba(0,0,0,.26)66.67%,rgba(0,0,0,.26)100%)}
.mdl-slider.is-upgraded.is-lowest-value:focus:not(:active)::-ms-thumb{background:radial-gradient(circle closest-side,rgba(0,0,0,.12)0%,rgba(0,0,0,.12)25%,rgba(0,0,0,.26)25%,rgba(0,0,0,.26)37.5%,rgba(0,0,0,.12)37.5%,rgba(0,0,0,.12)100%);transform:scale(1)}
.mdl-slider.is-upgraded.is-lowest-value:active::-ms-thumb{transform:scale(.5625);background:radial-gradient(circle closest-side,transparent 0%,transparent 77.78%,rgba(0,0,0,.26)77.78%,rgba(0,0,0,.26)100%)}
.mdl-slider.is-upgraded.is-lowest-value::-ms-fill-lower{background:0 0}
.mdl-slider.is-upgraded.is-lowest-value::-ms-fill-upper{margin-left:6px}
.mdl-slider.is-upgraded.is-lowest-value:active::-ms-fill-upper{margin-left:9px}
.mdl-slider.is-upgraded:disabled:focus::-webkit-slider-thumb,.mdl-slider.is-upgraded:disabled:active::-webkit-slider-thumb,.mdl-slider.is-upgraded:disabled::-webkit-slider-thumb{-webkit-transform:scale(.667);transform:scale(.667);background:rgba(0,0,0,.26)}
.mdl-slider.is-upgraded:disabled:focus::-moz-range-thumb,.mdl-slider.is-upgraded:disabled:active::-moz-range-thumb,.mdl-slider.is-upgraded:disabled::-moz-range-thumb{transform:scale(.667);background:rgba(0,0,0,.26)}
.mdl-slider.is-upgraded:disabled+.mdl-slider__background-flex>.mdl-slider__background-lower{background-color:rgba(0,0,0,.26);left:-6px}
.mdl-slider.is-upgraded:disabled+.mdl-slider__background-flex>.mdl-slider__background-upper{left:6px}
.mdl-slider.is-upgraded.is-lowest-value:disabled:focus::-webkit-slider-thumb,.mdl-slider.is-upgraded.is-lowest-value:disabled:active::-webkit-slider-thumb,.mdl-slider.is-upgraded.is-lowest-value:disabled::-webkit-slider-thumb{border:3px solid rgba(0,0,0,.26);background:0 0;-webkit-transform:scale(.667);transform:scale(.667)}
.mdl-slider.is-upgraded.is-lowest-value:disabled:focus::-moz-range-thumb,.mdl-slider.is-upgraded.is-lowest-value:disabled:active::-moz-range-thumb,.mdl-slider.is-upgraded.is-lowest-value:disabled::-moz-range-thumb{border:3px solid rgba(0,0,0,.26);background:0 0;transform:scale(.667)}
.mdl-slider.is-upgraded.is-lowest-value:disabled:active+.mdl-slider__background-flex>.mdl-slider__background-upper{left:6px}
.mdl-slider.is-upgraded:disabled:focus::-ms-thumb,.mdl-slider.is-upgraded:disabled:active::-ms-thumb,.mdl-slider.is-upgraded:disabled::-ms-thumb{transform:scale(.25);background:rgba(0,0,0,.26)}
.mdl-slider.is-upgraded.is-lowest-value:disabled:focus::-ms-thumb,.mdl-slider.is-upgraded.is-lowest-value:disabled:active::-ms-thumb,.mdl-slider.is-upgraded.is-lowest-value:disabled::-ms-thumb{transform:scale(.25);background:radial-gradient(circle closest-side,transparent 0%,transparent 50%,rgba(0,0,0,.26)50%,rgba(0,0,0,.26)100%)}
.mdl-slider.is-upgraded:disabled::-ms-fill-lower{margin-right:6px;background:linear-gradient(to right,transparent,transparent 25px,rgba(0,0,0,.26)25px,rgba(0,0,0,.26)0)}
.mdl-slider.is-upgraded:disabled::-ms-fill-upper{margin-left:6px}
.mdl-slider.is-upgraded.is-lowest-value:disabled:active::-ms-fill-upper{margin-left:6px}
.mdl-slider__ie-container{height:18px;overflow:visible;border:none;margin:none;padding:none}
.mdl-slider__container{height:18px;position:relative;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}
.mdl-slider__container,.mdl-slider__background-flex{background:0 0;display:-webkit-flex;display:-ms-flexbox;display:flex}
.mdl-slider__background-flex{position:absolute;height:2px;width:calc(100% - 52px);top:50%;left:0;margin:0 26px;overflow:hidden;border:0;padding:0;-webkit-transform:translate(0,-1px);transform:translate(0,-1px)}
.mdl-slider__background-lower{background:#3f51b5}
.mdl-slider__background-lower,.mdl-slider__background-upper{-webkit-flex:0;-ms-flex:0;flex:0;position:relative;border:0;padding:0}
.mdl-slider__background-upper{background:rgba(0,0,0,.26);transition:left .18s cubic-bezier(.4,0,.2,1)}
MDL_SLIDER;
        }

        if ($this->MaterialDesignComponents['mdl-snackbar']) {
            $return .= <<<MDL_SNACKBAR
.mdl-snackbar{position:fixed;bottom:0;left:50%;cursor:default;background-color:#323232;z-index:3;display:block;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;font-family:"Roboto","Helvetica","Arial",sans-serif;will-change:transform;-webkit-transform:translate(0,80px);transform:translate(0,80px);transition:transform .25s cubic-bezier(.4,0,1,1);transition:transform .25s cubic-bezier(.4,0,1,1),-webkit-transform .25s cubic-bezier(.4,0,1,1);pointer-events:none}
@media (max-width:479px){
  .mdl-snackbar{width:100%;left:0;min-height:48px;max-height:80px}
}
.mdl-snackbar--active{-webkit-transform:translate(0,0);transform:translate(0,0);pointer-events:auto;transition:transform .25s cubic-bezier(0,0,.2,1);transition:transform .25s cubic-bezier(0,0,.2,1),-webkit-transform .25s cubic-bezier(0,0,.2,1)}
@media (min-width:480px) {
  .mdl-snackbar{min-width:288px;max-width:568px;border-radius:2px;-webkit-transform:translate(-50%,80px);transform:translate(-50%,80px)}
  .mdl-snackbar--active{-webkit-transform:translate(-50%,0);transform:translate(-50%,0)}
}
.mdl-snackbar__text{padding:14px 12px 14px 24px;vertical-align:middle;color:#fff;float:left}
.mdl-snackbar__action{background:0 0;border:none;color:#ff4081;float:right;padding:14px 24px 14px 12px;font-family:"Roboto","Helvetica","Arial",sans-serif;font-size:14px;font-weight:500;text-transform:uppercase;line-height:1;letter-spacing:0;overflow:hidden;outline:none;opacity:0;pointer-events:none;cursor:pointer;text-decoration:none;text-align:center;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center}
.mdl-snackbar__action::-moz-focus-inner{border:0}
.mdl-snackbar__action:not([aria-hidden]){opacity:1;pointer-events:auto}
MDL_SNACKBAR;
        }

        if ($this->MaterialDesignComponents['mdl-spinner']) {
            $return .= <<<MDL_SPINNER
.mdl-spinner{display:inline-block;position:relative;width:28px;height:28px}
.mdl-spinner:not(.is-upgraded).is-active:after{content:"Loading..."}
.mdl-spinner.is-upgraded.is-active{-webkit-animation:mdl-spinner__container-rotate 1568.23529412ms linear infinite;animation:mdl-spinner__container-rotate 1568.23529412ms linear infinite}
@-webkit-keyframes mdl-spinner__container-rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
@keyframes mdl-spinner__container-rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
.mdl-spinner__layer{position:absolute;width:100%;height:100%;opacity:0}
.mdl-spinner__layer-1{border-color:#42a5f5}
.mdl-spinner--single-color .mdl-spinner__layer-1{border-color:#3f51b5}
.mdl-spinner.is-active .mdl-spinner__layer-1{-webkit-animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-1-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both;animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-1-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both}
.mdl-spinner__layer-2{border-color:#f44336}
.mdl-spinner--single-color .mdl-spinner__layer-2{border-color:#3f51b5}
.mdl-spinner.is-active .mdl-spinner__layer-2{-webkit-animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-2-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both;animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-2-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both}
.mdl-spinner__layer-3{border-color:#fdd835}
.mdl-spinner--single-color .mdl-spinner__layer-3{border-color:#3f51b5}
.mdl-spinner.is-active .mdl-spinner__layer-3{-webkit-animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-3-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both;animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-3-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both}
.mdl-spinner__layer-4{border-color:#4caf50}
.mdl-spinner--single-color .mdl-spinner__layer-4{border-color:#3f51b5}
.mdl-spinner.is-active .mdl-spinner__layer-4{-webkit-animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-4-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both;animation:mdl-spinner__fill-unfill-rotate 5332ms cubic-bezier(.4,0,.2,1)infinite both,mdl-spinner__layer-4-fade-in-out 5332ms cubic-bezier(.4,0,.2,1)infinite both}
@-webkit-keyframes mdl-spinner__fill-unfill-rotate{12.5%{-webkit-transform:rotate(135deg);transform:rotate(135deg)}25%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}37.5%{-webkit-transform:rotate(405deg);transform:rotate(405deg)}50%{-webkit-transform:rotate(540deg);transform:rotate(540deg)}62.5%{-webkit-transform:rotate(675deg);transform:rotate(675deg)}75%{-webkit-transform:rotate(810deg);transform:rotate(810deg)}87.5%{-webkit-transform:rotate(945deg);transform:rotate(945deg)}to{-webkit-transform:rotate(1080deg);transform:rotate(1080deg)}}
@keyframes mdl-spinner__fill-unfill-rotate{12.5%{-webkit-transform:rotate(135deg);transform:rotate(135deg)}25%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}37.5%{-webkit-transform:rotate(405deg);transform:rotate(405deg)}50%{-webkit-transform:rotate(540deg);transform:rotate(540deg)}62.5%{-webkit-transform:rotate(675deg);transform:rotate(675deg)}75%{-webkit-transform:rotate(810deg);transform:rotate(810deg)}87.5%{-webkit-transform:rotate(945deg);transform:rotate(945deg)}to{-webkit-transform:rotate(1080deg);transform:rotate(1080deg)}}
@-webkit-keyframes mdl-spinner__layer-1-fade-in-out{from,25%{opacity:.99}26%,89%{opacity:0}90%,100%{opacity:.99}}
@keyframes mdl-spinner__layer-1-fade-in-out{from,25%{opacity:.99}26%,89%{opacity:0}90%,100%{opacity:.99}}
@-webkit-keyframes mdl-spinner__layer-2-fade-in-out{from,15%{opacity:0}25%,50%{opacity:.99}51%{opacity:0}}
@keyframes mdl-spinner__layer-2-fade-in-out{from,15%{opacity:0}25%,50%{opacity:.99}51%{opacity:0}}
@-webkit-keyframes mdl-spinner__layer-3-fade-in-out{from,40%{opacity:0}50%,75%{opacity:.99}76%{opacity:0}}
@keyframes mdl-spinner__layer-3-fade-in-out{from,40%{opacity:0}50%,75%{opacity:.99}76%{opacity:0}}
@-webkit-keyframes mdl-spinner__layer-4-fade-in-out{from,65%{opacity:0}75%,90%{opacity:.99}100%{opacity:0}}
@keyframes mdl-spinner__layer-4-fade-in-out{from,65%{opacity:0}75%,90%{opacity:.99}100%{opacity:0}}
.mdl-spinner__gap-patch{position:absolute;box-sizing:border-box;top:0;left:45%;width:10%;height:100%;overflow:hidden;border-color:inherit}
.mdl-spinner__gap-patch .mdl-spinner__circle{width:1000%;left:-450%}
.mdl-spinner__circle-clipper{display:inline-block;position:relative;width:50%;height:100%;overflow:hidden;border-color:inherit}
.mdl-spinner__circle-clipper .mdl-spinner__circle{width:200%}
.mdl-spinner__circle{box-sizing:border-box;height:100%;border-width:3px;border-style:solid;border-color:inherit;border-bottom-color:transparent!important;border-radius:50%;-webkit-animation:none;animation:none;position:absolute;top:0;right:0;bottom:0;left:0}
.mdl-spinner__left .mdl-spinner__circle{border-right-color:transparent!important;-webkit-transform:rotate(129deg);transform:rotate(129deg)}
.mdl-spinner.is-active .mdl-spinner__left .mdl-spinner__circle{-webkit-animation:mdl-spinner__left-spin 1333ms cubic-bezier(.4,0,.2,1)infinite both;animation:mdl-spinner__left-spin 1333ms cubic-bezier(.4,0,.2,1)infinite both}
.mdl-spinner__right .mdl-spinner__circle{left:-100%;border-left-color:transparent!important;-webkit-transform:rotate(-129deg);transform:rotate(-129deg)}
.mdl-spinner.is-active .mdl-spinner__right .mdl-spinner__circle{-webkit-animation:mdl-spinner__right-spin 1333ms cubic-bezier(.4,0,.2,1)infinite both;animation:mdl-spinner__right-spin 1333ms cubic-bezier(.4,0,.2,1)infinite both}
@-webkit-keyframes mdl-spinner__left-spin{from{-webkit-transform:rotate(130deg);transform:rotate(130deg)}50%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(130deg);transform:rotate(130deg)}}
@keyframes mdl-spinner__left-spin{from{-webkit-transform:rotate(130deg);transform:rotate(130deg)}50%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(130deg);transform:rotate(130deg)}}
@-webkit-keyframes mdl-spinner__right-spin{from{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}50%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}to{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}}
@keyframes mdl-spinner__right-spin{from{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}50%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}to{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}}
MDL_SPINNER;
        }

        if ($this->MaterialDesignComponents['mdl-switch']) {
            $return .= <<<MDL_SWITCH
.mdl-switch{position:relative;z-index:1;vertical-align:middle;display:inline-block;box-sizing:border-box;width:100%;height:24px;margin:0;padding:0;overflow:visible;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.mdl-switch.is-upgraded{padding-left:28px}
.mdl-switch__input{line-height:24px}
.mdl-switch.is-upgraded .mdl-switch__input{position:absolute;width:0;height:0;margin:0;padding:0;opacity:0;-ms-appearance:none;-moz-appearance:none;-webkit-appearance:none;appearance:none;border:none}
.mdl-switch__track{background:rgba(0,0,0,.26);position:absolute;left:0;top:5px;height:14px;width:36px;border-radius:14px;cursor:pointer}
.mdl-switch.is-checked .mdl-switch__track{background:rgba(63,81,181,.5)}
.mdl-switch__track fieldset[disabled] .mdl-switch,.mdl-switch.is-disabled .mdl-switch__track{background:rgba(0,0,0,.12);cursor:auto}
.mdl-switch__thumb{background:#fafafa;position:absolute;left:0;top:2px;height:20px;width:20px;border-radius:50%;cursor:pointer;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);transition-duration:.28s;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-property:left}
.mdl-switch.is-checked .mdl-switch__thumb{background:#3f51b5;left:16px;box-shadow:0 3px 4px 0 rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.2),0 1px 8px 0 rgba(0,0,0,.12)}
.mdl-switch__thumb fieldset[disabled] .mdl-switch,.mdl-switch.is-disabled .mdl-switch__thumb{background:#bdbdbd;cursor:auto}
.mdl-switch__focus-helper{position:absolute;top:50%;left:50%;-webkit-transform:translate(-4px,-4px);transform:translate(-4px,-4px);display:inline-block;box-sizing:border-box;width:8px;height:8px;border-radius:50%;background-color:transparent}
.mdl-switch.is-focused .mdl-switch__focus-helper{box-shadow:0 0 0 20px rgba(0,0,0,.1);background-color:rgba(0,0,0,.1)}
.mdl-switch.is-focused.is-checked .mdl-switch__focus-helper{box-shadow:0 0 0 20px rgba(63,81,181,.26);background-color:rgba(63,81,181,.26)}
.mdl-switch__label{position:relative;cursor:pointer;font-size:16px;line-height:24px;margin:0;left:24px}
.mdl-switch__label fieldset[disabled] .mdl-switch,.mdl-switch.is-disabled .mdl-switch__label{color:#bdbdbd;cursor:auto}
.mdl-switch__ripple-container{position:absolute;z-index:2;top:-12px;left:-14px;box-sizing:border-box;width:48px;height:48px;border-radius:50%;cursor:pointer;overflow:hidden;-webkit-mask-image:-webkit-radial-gradient(circle,#fff,#000);transition-duration:.4s;transition-timing-function:step-end;transition-property:left}
.mdl-switch__ripple-container .mdl-ripple{background:#3f51b5}
.mdl-switch__ripple-container fieldset[disabled] .mdl-switch,.mdl-switch.is-disabled .mdl-switch__ripple-container{cursor:auto}
fieldset[disabled] .mdl-switch .mdl-switch__ripple-container .mdl-ripple,.mdl-switch.is-disabled .mdl-switch__ripple-container .mdl-ripple{background:0 0}
.mdl-switch.is-checked .mdl-switch__ripple-container{left:2px}
MDL_SWITCH;
        }

        if ($this->MaterialDesignComponents['mdl-tabs']) {
            $return .= <<<MDL_TABS
.mdl-tabs{display:block;width:100%}
.mdl-tabs__tab-bar{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:space-between;-ms-flex-line-pack:justify;align-content:space-between;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;height:48px;padding:0;margin:0;border-bottom:1px solid #e0e0e0}
.mdl-tabs__tab{margin:0;border:none;padding:0 24px;float:left;position:relative;display:block;text-decoration:none;height:48px;line-height:48px;text-align:center;font-weight:500;font-size:14px;text-transform:uppercase;color:$this->SecondaryTextColor;overflow:hidden}
.mdl-tabs.is-upgraded .mdl-tabs__tab.is-active{color:$this->PrimaryTextColor}
.mdl-tabs.is-upgraded .mdl-tabs__tab.is-active:after{height:2px;width:100%;display:block;content:" ";bottom:0;left:0;position:absolute;background:#3f51b5;-webkit-animation:border-expand .2s cubic-bezier(.4,0,.4,1).01s alternate forwards;animation:border-expand .2s cubic-bezier(.4,0,.4,1).01s alternate forwards;transition:all 1s cubic-bezier(.4,0,1,1)}
.mdl-tabs__tab .mdl-tabs__ripple-container{display:block;position:absolute;height:100%;width:100%;left:0;top:0;z-index:1;overflow:hidden}
.mdl-tabs__tab .mdl-tabs__ripple-container .mdl-ripple{background:#3f51b5}
.mdl-tabs__panel{display:block}
.mdl-tabs.is-upgraded .mdl-tabs__panel{display:none}
.mdl-tabs.is-upgraded .mdl-tabs__panel.is-active{display:block}
@-webkit-keyframes border-expand{0%{opacity:0;width:0}100%{opacity:1;width:100%}}
@keyframes border-expand{0%{opacity:0;width:0}100%{opacity:1;width:100%}}
MDL_TABS;
        }

        if ($this->MaterialDesignComponents['mdl-textfield']) {
            $return .= <<<MDL_TEXTFIELD
.mdl-textfield{position:relative;font-size:16px;display:inline-block;box-sizing:border-box;width:300px;max-width:100%;margin:0;padding:20px 0}
.mdl-textfield .mdl-button{position:absolute;bottom:20px}
.mdl-textfield--align-right{text-align:right}
.mdl-textfield--full-width{width:100%}
.mdl-textfield--expandable{min-width:32px;width:auto;min-height:32px}
.mdl-textfield--expandable .mdl-button--icon{top:16px}
.mdl-textfield__input{border:none;border-bottom:1px solid rgba(0,0,0,.12);display:block;font-size:16px;font-family:"Helvetica","Arial",sans-serif;margin:0;padding:4px 0;width:100%;background:0 0;text-align:left;color:inherit}
.mdl-textfield__input[type="number"]{-moz-appearance:textfield}
.mdl-textfield__input[type="number"]::-webkit-inner-spin-button,.mdl-textfield__input[type="number"]::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}
.mdl-textfield.is-focused .mdl-textfield__input{outline:none}
.mdl-textfield.is-invalid .mdl-textfield__input{border-color:#d50000;box-shadow:none}
fieldset[disabled] .mdl-textfield .mdl-textfield__input,.mdl-textfield.is-disabled .mdl-textfield__input{background-color:transparent;border-bottom:1px dotted rgba(0,0,0,.12);color:rgba(0,0,0,.26)}
.mdl-textfield textarea.mdl-textfield__input{display:block}
.mdl-textfield__label{bottom:0;color:rgba(0,0,0,.26);font-size:16px;left:0;right:0;pointer-events:none;position:absolute;display:block;top:24px;width:100%;overflow:hidden;white-space:nowrap;text-align:left}
.mdl-textfield.is-dirty .mdl-textfield__label,.mdl-textfield.has-placeholder .mdl-textfield__label{visibility:hidden}
.mdl-textfield--floating-label .mdl-textfield__label{transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1)}
.mdl-textfield--floating-label.has-placeholder .mdl-textfield__label{transition:none}
fieldset[disabled] .mdl-textfield .mdl-textfield__label,.mdl-textfield.is-disabled.is-disabled .mdl-textfield__label{color:rgba(0,0,0,.26)}
.mdl-textfield--floating-label.is-focused .mdl-textfield__label,.mdl-textfield--floating-label.is-dirty .mdl-textfield__label,.mdl-textfield--floating-label.has-placeholder .mdl-textfield__label{color:#3f51b5;font-size:12px;top:4px;visibility:visible}
.mdl-textfield--floating-label.is-focused .mdl-textfield__expandable-holder .mdl-textfield__label,.mdl-textfield--floating-label.is-dirty .mdl-textfield__expandable-holder .mdl-textfield__label,.mdl-textfield--floating-label.has-placeholder .mdl-textfield__expandable-holder .mdl-textfield__label{top:-16px}
.mdl-textfield--floating-label.is-invalid .mdl-textfield__label{color:#d50000;font-size:12px}
.mdl-textfield__label:after{background-color:#3f51b5;bottom:20px;content:'';height:2px;left:45%;position:absolute;transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1);visibility:hidden;width:10px}
.mdl-textfield.is-focused .mdl-textfield__label:after{left:0;visibility:visible;width:100%}
.mdl-textfield.is-invalid .mdl-textfield__label:after{background-color:#d50000}
.mdl-textfield__error{color:#d50000;position:absolute;font-size:12px;margin-top:3px;visibility:hidden;display:block}
.mdl-textfield.is-invalid .mdl-textfield__error{visibility:visible}
.mdl-textfield__expandable-holder{display:inline-block;position:relative;margin-left:32px;transition-duration:.2s;transition-timing-function:cubic-bezier(.4,0,.2,1);display:inline-block;max-width:.1px}
.mdl-textfield.is-focused .mdl-textfield__expandable-holder,.mdl-textfield.is-dirty .mdl-textfield__expandable-holder{max-width:600px}
.mdl-textfield__expandable-holder .mdl-textfield__label:after{bottom:0}
MDL_TEXTFIELD;
        }

        if ($this->MaterialDesignComponents['mdl-tooltip']) {
            $return .= <<<MDL_TOOLTIP
.mdl-tooltip{-webkit-transform:scale(0);transform:scale(0);-webkit-transform-origin:top center;transform-origin:top center;z-index:999;background:rgba(97,97,97,.9);border-radius:2px;color:#fff;display:inline-block;font-size:10px;font-weight:500;line-height:14px;max-width:170px;position:fixed;top:-500px;left:-500px;padding:8px;text-align:center}
.mdl-tooltip.is-active{-webkit-animation:pulse 200ms cubic-bezier(0,0,.2,1)forwards;animation:pulse 200ms cubic-bezier(0,0,.2,1)forwards}
.mdl-tooltip--large{line-height:14px;font-size:14px;padding:16px}
@-webkit-keyframes pulse{0%{-webkit-transform:scale(0);transform:scale(0);opacity:0}50%{-webkit-transform:scale(.99);transform:scale(.99)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1;visibility:visible}}
@keyframes pulse{0%{-webkit-transform:scale(0);transform:scale(0);opacity:0}50%{-webkit-transform:scale(.99);transform:scale(.99)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1;visibility:visible}}
MDL_TOOLTIP;
        }

        if ($this->MaterialDesignComponents['mdl-shadow']) {
            $return .= <<<MDL_SHADOW
.mdl-shadow--2dp{box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
.mdl-shadow--3dp{box-shadow:0 3px 4px 0 rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.2),0 1px 8px 0 rgba(0,0,0,.12)}
.mdl-shadow--4dp{box-shadow:0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12),0 2px 4px -1px rgba(0,0,0,.2)}
.mdl-shadow--6dp{box-shadow:0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12),0 3px 5px -1px rgba(0,0,0,.2)}
.mdl-shadow--8dp{box-shadow:0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12),0 5px 5px -3px rgba(0,0,0,.2)}
.mdl-shadow--16dp{box-shadow:0 16px 24px 2px rgba(0,0,0,.14),0 6px 30px 5px rgba(0,0,0,.12),0 8px 10px -5px rgba(0,0,0,.2)}
.mdl-shadow--24dp{box-shadow:0 9px 46px 8px rgba(0,0,0,.14),0 11px 15px -7px rgba(0,0,0,.12),0 24px 38px 3px rgba(0,0,0,.2)}
MDL_SHADOW;
        }

        if ($this->MaterialDesignComponents['mdl-grid']) {
            $return .= <<<MDL_GRID

.mdl-grid{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-flow:row wrap;-ms-flex-flow:row wrap;flex-flow:row wrap;margin:0 auto;-webkit-align-items:stretch;-ms-flex-align:stretch;align-items:stretch}
.mdl-grid.mdl-grid--no-spacing{padding:0}
.mdl-cell{box-sizing:border-box}
.mdl-cell--top{-webkit-align-self:flex-start;-ms-flex-item-align:start;align-self:flex-start}
.mdl-cell--middle{-webkit-align-self:center;-ms-flex-item-align:center;align-self:center}
.mdl-cell--bottom{-webkit-align-self:flex-end;-ms-flex-item-align:end;align-self:flex-end}
.mdl-cell--stretch{-webkit-align-self:stretch;-ms-flex-item-align:stretch;align-self:stretch}
.mdl-grid.mdl-grid--no-spacing>.mdl-cell{margin:0}
.mdl-cell--order-1{-webkit-order:1;-ms-flex-order:1;order:1}
.mdl-cell--order-2{-webkit-order:2;-ms-flex-order:2;order:2}
.mdl-cell--order-3{-webkit-order:3;-ms-flex-order:3;order:3}
.mdl-cell--order-4{-webkit-order:4;-ms-flex-order:4;order:4}
.mdl-cell--order-5{-webkit-order:5;-ms-flex-order:5;order:5}
.mdl-cell--order-6{-webkit-order:6;-ms-flex-order:6;order:6}
.mdl-cell--order-7{-webkit-order:7;-ms-flex-order:7;order:7}
.mdl-cell--order-8{-webkit-order:8;-ms-flex-order:8;order:8}
.mdl-cell--order-9{-webkit-order:9;-ms-flex-order:9;order:9}
.mdl-cell--order-10{-webkit-order:10;-ms-flex-order:10;order:10}
.mdl-cell--order-11{-webkit-order:11;-ms-flex-order:11;order:11}
.mdl-cell--order-12{-webkit-order:12;-ms-flex-order:12;order:12}
.mdl-cell--hide-phone{display:none}

@media (max-width:479px){
  .mdl-grid{padding:8px}
  .mdl-cell{margin:8px;width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell{width:100%}
  .mdl-cell--order-1-phone.mdl-cell--order-1-phone{-webkit-order:1;-ms-flex-order:1;order:1}
  .mdl-cell--order-2-phone.mdl-cell--order-2-phone{-webkit-order:2;-ms-flex-order:2;order:2}
  .mdl-cell--order-3-phone.mdl-cell--order-3-phone{-webkit-order:3;-ms-flex-order:3;order:3}
  .mdl-cell--order-4-phone.mdl-cell--order-4-phone{-webkit-order:4;-ms-flex-order:4;order:4}
  .mdl-cell--order-5-phone.mdl-cell--order-5-phone{-webkit-order:5;-ms-flex-order:5;order:5}
  .mdl-cell--order-6-phone.mdl-cell--order-6-phone{-webkit-order:6;-ms-flex-order:6;order:6}
  .mdl-cell--order-7-phone.mdl-cell--order-7-phone{-webkit-order:7;-ms-flex-order:7;order:7}
  .mdl-cell--order-8-phone.mdl-cell--order-8-phone{-webkit-order:8;-ms-flex-order:8;order:8}
  .mdl-cell--order-9-phone.mdl-cell--order-9-phone{-webkit-order:9;-ms-flex-order:9;order:9}
  .mdl-cell--order-10-phone.mdl-cell--order-10-phone{-webkit-order:10;-ms-flex-order:10;order:10}
  .mdl-cell--order-11-phone.mdl-cell--order-11-phone{-webkit-order:11;-ms-flex-order:11;order:11}
  .mdl-cell--order-12-phone.mdl-cell--order-12-phone{-webkit-order:12;-ms-flex-order:12;order:12}
  .mdl-cell--1-col,.mdl-cell--1-col-phone.mdl-cell--1-col-phone{width:calc(25% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--1-col,.mdl-grid--no-spacing>.mdl-cell--1-col-phone.mdl-cell--1-col-phone{width:25%}
  .mdl-cell--2-col,.mdl-cell--2-col-phone.mdl-cell--2-col-phone{width:calc(50% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--2-col,.mdl-grid--no-spacing>.mdl-cell--2-col-phone.mdl-cell--2-col-phone{width:50%}
  .mdl-cell--3-col,.mdl-cell--3-col-phone.mdl-cell--3-col-phone{width:calc(75% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--3-col,.mdl-grid--no-spacing>.mdl-cell--3-col-phone.mdl-cell--3-col-phone{width:75%}
  .mdl-cell--4-col,.mdl-cell--4-col-phone.mdl-cell--4-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--4-col,.mdl-grid--no-spacing>.mdl-cell--4-col-phone.mdl-cell--4-col-phone{width:100%}
  .mdl-cell--5-col,.mdl-cell--5-col-phone.mdl-cell--5-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--5-col,.mdl-grid--no-spacing>.mdl-cell--5-col-phone.mdl-cell--5-col-phone{width:100%}
  .mdl-cell--6-col,.mdl-cell--6-col-phone.mdl-cell--6-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--6-col,.mdl-grid--no-spacing>.mdl-cell--6-col-phone.mdl-cell--6-col-phone{width:100%}
  .mdl-cell--7-col,.mdl-cell--7-col-phone.mdl-cell--7-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--7-col,.mdl-grid--no-spacing>.mdl-cell--7-col-phone.mdl-cell--7-col-phone{width:100%}
  .mdl-cell--8-col,.mdl-cell--8-col-phone.mdl-cell--8-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--8-col,.mdl-grid--no-spacing>.mdl-cell--8-col-phone.mdl-cell--8-col-phone{width:100%}
  .mdl-cell--9-col,.mdl-cell--9-col-phone.mdl-cell--9-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--9-col,.mdl-grid--no-spacing>.mdl-cell--9-col-phone.mdl-cell--9-col-phone{width:100%}
  .mdl-cell--10-col,.mdl-cell--10-col-phone.mdl-cell--10-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--10-col,.mdl-grid--no-spacing>.mdl-cell--10-col-phone.mdl-cell--10-col-phone{width:100%}
  .mdl-cell--11-col,.mdl-cell--11-col-phone.mdl-cell--11-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--11-col,.mdl-grid--no-spacing>.mdl-cell--11-col-phone.mdl-cell--11-col-phone{width:100%}
  .mdl-cell--12-col,.mdl-cell--12-col-phone.mdl-cell--12-col-phone{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--12-col,.mdl-grid--no-spacing>.mdl-cell--12-col-phone.mdl-cell--12-col-phone{width:100%}
  .mdl-cell--1-offset,.mdl-cell--1-offset-phone.mdl-cell--1-offset-phone{margin-left:calc(25% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--1-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--1-offset-phone.mdl-cell--1-offset-phone{margin-left:25%}
  .mdl-cell--2-offset,.mdl-cell--2-offset-phone.mdl-cell--2-offset-phone{margin-left:calc(50% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--2-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--2-offset-phone.mdl-cell--2-offset-phone{margin-left:50%}
  .mdl-cell--3-offset,.mdl-cell--3-offset-phone.mdl-cell--3-offset-phone{margin-left:calc(75% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--3-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--3-offset-phone.mdl-cell--3-offset-phone{margin-left:75%}
}

@media (min-width:480px) and (max-width:839px){
  .mdl-grid{padding:8px}
  .mdl-cell{margin:8px;width:calc(50% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell{width:50%}
  .mdl-cell--hide-tablet{display:none!important}
  .mdl-cell--order-1-tablet.mdl-cell--order-1-tablet{-webkit-order:1;-ms-flex-order:1;order:1}
  .mdl-cell--order-2-tablet.mdl-cell--order-2-tablet{-webkit-order:2;-ms-flex-order:2;order:2}
  .mdl-cell--order-3-tablet.mdl-cell--order-3-tablet{-webkit-order:3;-ms-flex-order:3;order:3}
  .mdl-cell--order-4-tablet.mdl-cell--order-4-tablet{-webkit-order:4;-ms-flex-order:4;order:4}
  .mdl-cell--order-5-tablet.mdl-cell--order-5-tablet{-webkit-order:5;-ms-flex-order:5;order:5}
  .mdl-cell--order-6-tablet.mdl-cell--order-6-tablet{-webkit-order:6;-ms-flex-order:6;order:6}
  .mdl-cell--order-7-tablet.mdl-cell--order-7-tablet{-webkit-order:7;-ms-flex-order:7;order:7}
  .mdl-cell--order-8-tablet.mdl-cell--order-8-tablet{-webkit-order:8;-ms-flex-order:8;order:8}
  .mdl-cell--order-9-tablet.mdl-cell--order-9-tablet{-webkit-order:9;-ms-flex-order:9;order:9}
  .mdl-cell--order-10-tablet.mdl-cell--order-10-tablet{-webkit-order:10;-ms-flex-order:10;order:10}
  .mdl-cell--order-11-tablet.mdl-cell--order-11-tablet{-webkit-order:11;-ms-flex-order:11;order:11}
  .mdl-cell--order-12-tablet.mdl-cell--order-12-tablet{-webkit-order:12;-ms-flex-order:12;order:12}
  .mdl-cell--1-col,.mdl-cell--1-col-tablet.mdl-cell--1-col-tablet{width:calc(12.5% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--1-col,.mdl-grid--no-spacing>.mdl-cell--1-col-tablet.mdl-cell--1-col-tablet{width:12.5%}
  .mdl-cell--2-col,.mdl-cell--2-col-tablet.mdl-cell--2-col-tablet{width:calc(25% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--2-col,.mdl-grid--no-spacing>.mdl-cell--2-col-tablet.mdl-cell--2-col-tablet{width:25%}
  .mdl-cell--3-col,.mdl-cell--3-col-tablet.mdl-cell--3-col-tablet{width:calc(37.5% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--3-col,.mdl-grid--no-spacing>.mdl-cell--3-col-tablet.mdl-cell--3-col-tablet{width:37.5%}
  .mdl-cell--4-col,.mdl-cell--4-col-tablet.mdl-cell--4-col-tablet{width:calc(50% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--4-col,.mdl-grid--no-spacing>.mdl-cell--4-col-tablet.mdl-cell--4-col-tablet{width:50%}
  .mdl-cell--5-col,.mdl-cell--5-col-tablet.mdl-cell--5-col-tablet{width:calc(62.5% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--5-col,.mdl-grid--no-spacing>.mdl-cell--5-col-tablet.mdl-cell--5-col-tablet{width:62.5%}
  .mdl-cell--6-col,.mdl-cell--6-col-tablet.mdl-cell--6-col-tablet{width:calc(75% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--6-col,.mdl-grid--no-spacing>.mdl-cell--6-col-tablet.mdl-cell--6-col-tablet{width:75%}
  .mdl-cell--7-col,.mdl-cell--7-col-tablet.mdl-cell--7-col-tablet{width:calc(87.5% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--7-col,.mdl-grid--no-spacing>.mdl-cell--7-col-tablet.mdl-cell--7-col-tablet{width:87.5%}
  .mdl-cell--8-col,.mdl-cell--8-col-tablet.mdl-cell--8-col-tablet{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--8-col,.mdl-grid--no-spacing>.mdl-cell--8-col-tablet.mdl-cell--8-col-tablet{width:100%}
  .mdl-cell--9-col,.mdl-cell--9-col-tablet.mdl-cell--9-col-tablet{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--9-col,.mdl-grid--no-spacing>.mdl-cell--9-col-tablet.mdl-cell--9-col-tablet{width:100%}
  .mdl-cell--10-col,.mdl-cell--10-col-tablet.mdl-cell--10-col-tablet{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--10-col,.mdl-grid--no-spacing>.mdl-cell--10-col-tablet.mdl-cell--10-col-tablet{width:100%}
  .mdl-cell--11-col,.mdl-cell--11-col-tablet.mdl-cell--11-col-tablet{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--11-col,.mdl-grid--no-spacing>.mdl-cell--11-col-tablet.mdl-cell--11-col-tablet{width:100%}
  .mdl-cell--12-col,.mdl-cell--12-col-tablet.mdl-cell--12-col-tablet{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--12-col,.mdl-grid--no-spacing>.mdl-cell--12-col-tablet.mdl-cell--12-col-tablet{width:100%}
  .mdl-cell--1-offset,.mdl-cell--1-offset-tablet.mdl-cell--1-offset-tablet{margin-left:calc(12.5% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--1-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--1-offset-tablet.mdl-cell--1-offset-tablet{margin-left:12.5%}
  .mdl-cell--2-offset,.mdl-cell--2-offset-tablet.mdl-cell--2-offset-tablet{margin-left:calc(25% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--2-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--2-offset-tablet.mdl-cell--2-offset-tablet{margin-left:25%}
  .mdl-cell--3-offset,.mdl-cell--3-offset-tablet.mdl-cell--3-offset-tablet{margin-left:calc(37.5% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--3-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--3-offset-tablet.mdl-cell--3-offset-tablet{margin-left:37.5%}
  .mdl-cell--4-offset,.mdl-cell--4-offset-tablet.mdl-cell--4-offset-tablet{margin-left:calc(50% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--4-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--4-offset-tablet.mdl-cell--4-offset-tablet{margin-left:50%}
  .mdl-cell--5-offset,.mdl-cell--5-offset-tablet.mdl-cell--5-offset-tablet{margin-left:calc(62.5% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--5-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--5-offset-tablet.mdl-cell--5-offset-tablet{margin-left:62.5%}
  .mdl-cell--6-offset,.mdl-cell--6-offset-tablet.mdl-cell--6-offset-tablet{margin-left:calc(75% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--6-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--6-offset-tablet.mdl-cell--6-offset-tablet{margin-left:75%}
  .mdl-cell--7-offset,.mdl-cell--7-offset-tablet.mdl-cell--7-offset-tablet{margin-left:calc(87.5% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--7-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--7-offset-tablet.mdl-cell--7-offset-tablet{margin-left:87.5%}
}

@media (min-width:840px){
  .mdl-grid{padding:8px}
  .mdl-cell{margin:8px;width:calc(33.3333333333% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell{width:33.3333333333%}
  .mdl-cell--hide-desktop{display:none!important}
  .mdl-cell--order-1-desktop.mdl-cell--order-1-desktop{-webkit-order:1;-ms-flex-order:1;order:1}
  .mdl-cell--order-2-desktop.mdl-cell--order-2-desktop{-webkit-order:2;-ms-flex-order:2;order:2}
  .mdl-cell--order-3-desktop.mdl-cell--order-3-desktop{-webkit-order:3;-ms-flex-order:3;order:3}
  .mdl-cell--order-4-desktop.mdl-cell--order-4-desktop{-webkit-order:4;-ms-flex-order:4;order:4}
  .mdl-cell--order-5-desktop.mdl-cell--order-5-desktop{-webkit-order:5;-ms-flex-order:5;order:5}
  .mdl-cell--order-6-desktop.mdl-cell--order-6-desktop{-webkit-order:6;-ms-flex-order:6;order:6}
  .mdl-cell--order-7-desktop.mdl-cell--order-7-desktop{-webkit-order:7;-ms-flex-order:7;order:7}
  .mdl-cell--order-8-desktop.mdl-cell--order-8-desktop{-webkit-order:8;-ms-flex-order:8;order:8}
  .mdl-cell--order-9-desktop.mdl-cell--order-9-desktop{-webkit-order:9;-ms-flex-order:9;order:9}
  .mdl-cell--order-10-desktop.mdl-cell--order-10-desktop{-webkit-order:10;-ms-flex-order:10;order:10}
  .mdl-cell--order-11-desktop.mdl-cell--order-11-desktop{-webkit-order:11;-ms-flex-order:11;order:11}
  .mdl-cell--order-12-desktop.mdl-cell--order-12-desktop{-webkit-order:12;-ms-flex-order:12;order:12}
  .mdl-cell--1-col,.mdl-cell--1-col-desktop.mdl-cell--1-col-desktop{width:calc(8.3333333333% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--1-col,.mdl-grid--no-spacing>.mdl-cell--1-col-desktop.mdl-cell--1-col-desktop{width:8.3333333333%}
  .mdl-cell--2-col,.mdl-cell--2-col-desktop.mdl-cell--2-col-desktop{width:calc(16.6666666667% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--2-col,.mdl-grid--no-spacing>.mdl-cell--2-col-desktop.mdl-cell--2-col-desktop{width:16.6666666667%}
  .mdl-cell--3-col,.mdl-cell--3-col-desktop.mdl-cell--3-col-desktop{width:calc(25% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--3-col,.mdl-grid--no-spacing>.mdl-cell--3-col-desktop.mdl-cell--3-col-desktop{width:25%}
  .mdl-cell--4-col,.mdl-cell--4-col-desktop.mdl-cell--4-col-desktop{width:calc(33.3333333333% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--4-col,.mdl-grid--no-spacing>.mdl-cell--4-col-desktop.mdl-cell--4-col-desktop{width:33.3333333333%}
  .mdl-cell--5-col,.mdl-cell--5-col-desktop.mdl-cell--5-col-desktop{width:calc(41.6666666667% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--5-col,.mdl-grid--no-spacing>.mdl-cell--5-col-desktop.mdl-cell--5-col-desktop{width:41.6666666667%}
  .mdl-cell--6-col,.mdl-cell--6-col-desktop.mdl-cell--6-col-desktop{width:calc(50% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--6-col,.mdl-grid--no-spacing>.mdl-cell--6-col-desktop.mdl-cell--6-col-desktop{width:50%}
  .mdl-cell--7-col,.mdl-cell--7-col-desktop.mdl-cell--7-col-desktop{width:calc(58.3333333333% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--7-col,.mdl-grid--no-spacing>.mdl-cell--7-col-desktop.mdl-cell--7-col-desktop{width:58.3333333333%}
  .mdl-cell--8-col,.mdl-cell--8-col-desktop.mdl-cell--8-col-desktop{width:calc(66.6666666667% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--8-col,.mdl-grid--no-spacing>.mdl-cell--8-col-desktop.mdl-cell--8-col-desktop{width:66.6666666667%}
  .mdl-cell--9-col,.mdl-cell--9-col-desktop.mdl-cell--9-col-desktop{width:calc(75% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--9-col,.mdl-grid--no-spacing>.mdl-cell--9-col-desktop.mdl-cell--9-col-desktop{width:75%}
  .mdl-cell--10-col,.mdl-cell--10-col-desktop.mdl-cell--10-col-desktop{width:calc(83.3333333333% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--10-col,.mdl-grid--no-spacing>.mdl-cell--10-col-desktop.mdl-cell--10-col-desktop{width:83.3333333333%}
  .mdl-cell--11-col,.mdl-cell--11-col-desktop.mdl-cell--11-col-desktop{width:calc(91.6666666667% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--11-col,.mdl-grid--no-spacing>.mdl-cell--11-col-desktop.mdl-cell--11-col-desktop{width:91.6666666667%}
  .mdl-cell--12-col,.mdl-cell--12-col-desktop.mdl-cell--12-col-desktop{width:calc(100% - 16px)}
  .mdl-grid--no-spacing>.mdl-cell--12-col,.mdl-grid--no-spacing>.mdl-cell--12-col-desktop.mdl-cell--12-col-desktop{width:100%}
  .mdl-cell--1-offset,.mdl-cell--1-offset-desktop.mdl-cell--1-offset-desktop{margin-left:calc(8.3333333333% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--1-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--1-offset-desktop.mdl-cell--1-offset-desktop{margin-left:8.3333333333%}
  .mdl-cell--2-offset,.mdl-cell--2-offset-desktop.mdl-cell--2-offset-desktop{margin-left:calc(16.6666666667% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--2-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--2-offset-desktop.mdl-cell--2-offset-desktop{margin-left:16.6666666667%}
  .mdl-cell--3-offset,.mdl-cell--3-offset-desktop.mdl-cell--3-offset-desktop{margin-left:calc(25% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--3-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--3-offset-desktop.mdl-cell--3-offset-desktop{margin-left:25%}
  .mdl-cell--4-offset,.mdl-cell--4-offset-desktop.mdl-cell--4-offset-desktop{margin-left:calc(33.3333333333% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--4-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--4-offset-desktop.mdl-cell--4-offset-desktop{margin-left:33.3333333333%}
  .mdl-cell--5-offset,.mdl-cell--5-offset-desktop.mdl-cell--5-offset-desktop{margin-left:calc(41.6666666667% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--5-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--5-offset-desktop.mdl-cell--5-offset-desktop{margin-left:41.6666666667%}
  .mdl-cell--6-offset,.mdl-cell--6-offset-desktop.mdl-cell--6-offset-desktop{margin-left:calc(50% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--6-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--6-offset-desktop.mdl-cell--6-offset-desktop{margin-left:50%}
  .mdl-cell--7-offset,.mdl-cell--7-offset-desktop.mdl-cell--7-offset-desktop{margin-left:calc(58.3333333333% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--7-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--7-offset-desktop.mdl-cell--7-offset-desktop{margin-left:58.3333333333%}
  .mdl-cell--8-offset,.mdl-cell--8-offset-desktop.mdl-cell--8-offset-desktop{margin-left:calc(66.6666666667% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--8-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--8-offset-desktop.mdl-cell--8-offset-desktop{margin-left:66.6666666667%}
  .mdl-cell--9-offset,.mdl-cell--9-offset-desktop.mdl-cell--9-offset-desktop{margin-left:calc(75% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--9-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--9-offset-desktop.mdl-cell--9-offset-desktop{margin-left:75%}
  .mdl-cell--10-offset,.mdl-cell--10-offset-desktop.mdl-cell--10-offset-desktop{margin-left:calc(83.3333333333% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--10-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--10-offset-desktop.mdl-cell--10-offset-desktop{margin-left:83.3333333333%}
  .mdl-cell--11-offset,.mdl-cell--11-offset-desktop.mdl-cell--11-offset-desktop{margin-left:calc(91.6666666667% + 8px)}
  .mdl-grid.mdl-grid--no-spacing>.mdl-cell--11-offset,.mdl-grid.mdl-grid--no-spacing>.mdl-cell--11-offset-desktop.mdl-cell--11-offset-desktop{margin-left:91.6666666667%}
}

MDL_GRID;
        }

        $return .= <<<MDL_APPEND

.browserupgrade{margin:.2em 0;background:#ccc;color:#000;padding:.2em 0}
.visuallyhidden{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}
.visuallyhidden.focusable:active,.visuallyhidden.focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}
.invisible{visibility:hidden}
.hidden{display:none}

.clearfix:before,.clearfix:after{content:" ";display:table}
.clearfix:after{clear:both}

@media print{
  html,body,div,div:before,div:after,div:first-letter{background:transparent;color:#000;box-shadow:none}
  a,a:visited{text-decoration:underline}
  a[href]:after{content:" (" attr(href)")"}
  abbr[title]:after{content:" (" attr(title)")"}
  a[href^="#"]:after,a[href^="javascript:"]:after{content:""}
  pre,blockquote{border:1px solid #999;page-break-inside:avoid}
  thead{display:table-header-group}
  tr,img{page-break-inside:avoid}
  img{max-width:100%}
  p,h2,h3{orphans:3;widows:3}
  h2,h3{page-break-after:avoid}
}

MDL_APPEND;

        // Add additional CSS and MDL overrides.
        if (!empty($this->Overrides)) {
            $return .= $this->Overrides;
        }

        $return = str_replace("\r\n", "\n", $return);
        if ($this->Minify) {
            $return = str_replace(array_keys($this->MaterialDesignReplacements), array_values($this->MaterialDesignReplacements), $return);

            $return = str_replace("\n    ", null, $return);
            $return = str_replace("\n  ", null, $return);
            $return = str_replace("\n", null, $return);

            // Drop the -webkit-mask data URLs if the CSS exceeds 50,000 characters.
            if (strlen($return) > 50000) {
                $return = str_replace('-webkit-mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+CiAgICAgIDxwYXRoCiAgICAgICAgIGQ9Ik0gMCwwIDAsMSAxLDEgMSwwIDAsMCB6IE0gMC44NTM0Mzc1LDAuMTY3MTg3NSAwLjk1OTY4NzUsMC4yNzMxMjUgMC40MjkzNzUsMC44MDM0Mzc1IDAuMzIzMTI1LDAuOTA5Njg3NSAwLjIxNzE4NzUsMC44MDM0Mzc1IDAuMDQwMzEyNSwwLjYyNjg3NSAwLjE0NjU2MjUsMC41MjA2MjUgMC4zMjMxMjUsMC42OTc1IDAuODUzNDM3NSwwLjE2NzE4NzUgeiIKICAgICAgICAgc3R5bGU9ImZpbGw6I2ZmZmZmZjtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KICAgIDwvY2xpcFBhdGg+CiAgICA8bWFzayBpZD0ibWFzayIgbWFza1VuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgbWFza0NvbnRlbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giPgogICAgICA8cGF0aAogICAgICAgICBkPSJNIDAsMCAwLDEgMSwxIDEsMCAwLDAgeiBNIDAuODUzNDM3NSwwLjE2NzE4NzUgMC45NTk2ODc1LDAuMjczMTI1IDAuNDI5Mzc1LDAuODAzNDM3NSAwLjMyMzEyNSwwLjkwOTY4NzUgMC4yMTcxODc1LDAuODAzNDM3NSAwLjA0MDMxMjUsMC42MjY4NzUgMC4xNDY1NjI1LDAuNTIwNjI1IDAuMzIzMTI1LDAuNjk3NSAwLjg1MzQzNzUsMC4xNjcxODc1IHoiCiAgICAgICAgIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmUiIC8+CiAgICA8L21hc2s+CiAgPC9kZWZzPgogIDxyZWN0CiAgICAgd2lkdGg9IjEiCiAgICAgaGVpZ2h0PSIxIgogICAgIHg9IjAiCiAgICAgeT0iMCIKICAgICBjbGlwLXBhdGg9InVybCgjY2xpcCkiCiAgICAgc3R5bGU9ImZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KPC9zdmc+Cg==");mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8ZGVmcz4KICAgIDxjbGlwUGF0aCBpZD0iY2xpcCI+CiAgICAgIDxwYXRoCiAgICAgICAgIGQ9Ik0gMCwwIDAsMSAxLDEgMSwwIDAsMCB6IE0gMC44NTM0Mzc1LDAuMTY3MTg3NSAwLjk1OTY4NzUsMC4yNzMxMjUgMC40MjkzNzUsMC44MDM0Mzc1IDAuMzIzMTI1LDAuOTA5Njg3NSAwLjIxNzE4NzUsMC44MDM0Mzc1IDAuMDQwMzEyNSwwLjYyNjg3NSAwLjE0NjU2MjUsMC41MjA2MjUgMC4zMjMxMjUsMC42OTc1IDAuODUzNDM3NSwwLjE2NzE4NzUgeiIKICAgICAgICAgc3R5bGU9ImZpbGw6I2ZmZmZmZjtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KICAgIDwvY2xpcFBhdGg+CiAgICA8bWFzayBpZD0ibWFzayIgbWFza1VuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgbWFza0NvbnRlbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giPgogICAgICA8cGF0aAogICAgICAgICBkPSJNIDAsMCAwLDEgMSwxIDEsMCAwLDAgeiBNIDAuODUzNDM3NSwwLjE2NzE4NzUgMC45NTk2ODc1LDAuMjczMTI1IDAuNDI5Mzc1LDAuODAzNDM3NSAwLjMyMzEyNSwwLjkwOTY4NzUgMC4yMTcxODc1LDAuODAzNDM3NSAwLjA0MDMxMjUsMC42MjY4NzUgMC4xNDY1NjI1LDAuNTIwNjI1IDAuMzIzMTI1LDAuNjk3NSAwLjg1MzQzNzUsMC4xNjcxODc1IHoiCiAgICAgICAgIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmUiIC8+CiAgICA8L21hc2s+CiAgPC9kZWZzPgogIDxyZWN0CiAgICAgd2lkdGg9IjEiCiAgICAgaGVpZ2h0PSIxIgogICAgIHg9IjAiCiAgICAgeT0iMCIKICAgICBjbGlwLXBhdGg9InVybCgjY2xpcCkiCiAgICAgc3R5bGU9ImZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgLz4KPC9zdmc+Cg==");', null, $return);
                $return = str_replace('-webkit-mask:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+Cjxzdmcgd2lkdGg9IjEyIiBoZWlnaHQ9IjQiIHZpZXdQb3J0PSIwIDAgMTIgNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxlbGxpcHNlIGN4PSIyIiBjeT0iMiIgcng9IjIiIHJ5PSIyIj4KICAgIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9ImN4IiBmcm9tPSIyIiB0bz0iLTEwIiBkdXI9IjAuNnMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiAvPgogIDwvZWxsaXBzZT4KICA8ZWxsaXBzZSBjeD0iMTQiIGN5PSIyIiByeD0iMiIgcnk9IjIiIGNsYXNzPSJsb2FkZXIiPgogICAgPGFuaW1hdGUgYXR0cmlidXRlTmFtZT0iY3giIGZyb209IjE0IiB0bz0iMiIgZHVyPSIwLjZzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgLz4KICA8L2VsbGlwc2U+Cjwvc3ZnPgo=");', null, $return);
            }

            // Shorten the generic font stack addition `,"Helvetica Neue",Arial,sans-serif`
            if (strlen($return) > 50000) {
                $return = str_replace(',"Helvetica Neue",Arial,sans-serif', ',sans-serif', $return);
                $return = str_replace('Roboto,"Droid Sans",sans-serif', 'Roboto,sans-serif', $return);
            }

            // Drop -ms vendor prefixed CSS if the CSS still exceeds 50,000 characters.
            if (strlen($return) > 50000) {
                $return = str_replace('display:-ms-flexbox;', null, $return);
                $return = str_replace('-ms-appearance:none;', null, $return);
                $return = str_replace('-ms-flex:0;', null, $return);
                $return = str_replace('-ms-flex:0 0 100%;', null, $return);
                $return = str_replace('-ms-flex:0 0 auto;', null, $return);
                $return = str_replace('-ms-flex:0 1 auto;', null, $return);
                $return = str_replace('-ms-flex-align:center;', null, $return);
                $return = str_replace('-ms-flex-align:end;', null, $return);
                $return = str_replace('-ms-flex-align:start;', null, $return);
                $return = str_replace('-ms-flex-align:stretch;', null, $return);
                $return = str_replace('-ms-flex-direction:column;', null, $return);
                $return = str_replace('-ms-flex-direction:row;', null, $return);
                $return = str_replace('-ms-flex-direction:row-reverse;', null, $return);
                $return = str_replace('-ms-flex-flow:column;', null, $return);
                $return = str_replace('-ms-flex-flow:row nowrap;', null, $return);
                $return = str_replace('-ms-flex-flow:row wrap;', null, $return);
                $return = str_replace('-ms-flex-item-align:center;', null, $return);
                $return = str_replace('-ms-flex-item-align:end;', null, $return);
                $return = str_replace('-ms-flex-item-align:stretch;', null, $return);
                $return = str_replace('-ms-flex-line-pack:center;', null, $return);
                $return = str_replace('-ms-flex-line-pack:justify;', null, $return);
                $return = str_replace('-ms-flex-negative:0;', null, $return);
                $return = str_replace('-ms-flex-order:0;', null, $return);
                $return = str_replace('-ms-flex-order:1;', null, $return);
                $return = str_replace('-ms-flex-pack:center;', null, $return);
                $return = str_replace('-ms-flex-pack:end;', null, $return);
                $return = str_replace('-ms-flex-pack:justify;', null, $return);
                $return = str_replace('-ms-flex-pack:start;', null, $return);
                $return = str_replace('-ms-flex-pack:stretch;', null, $return);
                $return = str_replace('-ms-flex-positive:0;', null, $return);
                $return = str_replace('-ms-flex-positive:1;', null, $return);
                $return = str_replace('-ms-flex-positive:2;', null, $return);
                $return = str_replace('-ms-flex-wrap:nowrap;', null, $return);
                $return = str_replace('-ms-flex-wrap:wrap;', null, $return);
                $return = str_replace('-ms-grid-row-align:center;', null, $return);
                $return = str_replace('-ms-grid-row-align:stretch;', null, $return);
                $return = str_replace('-ms-touch-action:manipulation;', null, $return);
                $return = str_replace('-ms-user-select:none;', null, $return);
            }
        }

        return $return;
    }

    /**
     * Enable an MDL component.
     *
     * @param string $component
     *   Name of the MDL component to enable or * to enable all components.
     *
     * @return bool
     *   Returns true if the component was enabled or false if it does not
     *   exist or is not supported.
     */
    public function enable($component)
    {
        if (!is_string($component)) {
            throw new \InvalidArgumentException();
        }
        $component = trim($component);
        $component = ltrim($component, '.');
        $component = strtolower($component);

        if ($component == '*') {
            foreach ($this->MaterialDesignComponents as $key => $value) {
                $this->MaterialDesignComponents[$key] = true;
            }
            return true;
        }

        if (array_key_exists($component, $this->MaterialDesignComponents)) {
            $this->MaterialDesignComponents[$component] = true;
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the currently set font family name.
     *
     * @param void
     * @return string
     */
    public function getFontFamily()
    {
        return $this->FontFamily;
    }

    /**
     * Get a list of all font families.
     *
     * @param void
     * @return array
     */
    public function getFontFamilies()
    {
        ksort($this->FontStacks);
        return array_keys($this->FontStacks);
    }

    /**
     * Get a JSON encoded array with theme settings.
     *
     * @param void
     * @return string
     */
    public function getTheme()
    {
        $theme = array(
            'fontFamily' => $this->FontFamily,

            'badgeBackGroundColor' => strtolower($this->BadgeBackGroundColor),
            'chipBackgroundColor' => strtolower($this->ChipBackgroundColor),
            'linkColor' => strtolower($this->LinkColor),
            'markBackgroundColor' => strtolower($this->MarkBackgroundColor),
            'primaryTextColor' => strtolower($this->PrimaryTextColor),
            'secondaryTextColor' => strtolower($this->SecondaryTextColor),
            'selectionBackgroundColor' => strtolower($this->SelectionBackgroundColor),
        );

        if (!empty($this->Overrides)) {
            $theme['css'] = $this->Overrides;
        }

        return json_encode($theme, JSON_PRETTY_PRINT);
    }

    /**
     * Minify CSS and HTML
     *
     * @param bool|null $minify
     * @return void
     */
    public function minify($minify = true)
    {
        $this->Minify = (bool)$minify;
    }

    /**
     * Append additional CSS.
     *
     * @param string $css
     * @param bool|null $clear_existing_overrides
     * @return void
     */
    public function override($css, $clear_existing_overrides = false)
    {
        if ($clear_existing_overrides === true) {
            $this->Overrides = '';
        }
        $this->Overrides .= trim($css);
    }

    /**
     * Parse and optionally minify HTML.
     *
     * @param string $html
     *   HTML document or part of an HTML document, for example the
     *   <body>...</body> container.
     *
     * @param bool $minify
     *   If set to true, CSS classes are replaced by shorthand counterparts in
     *   the generated CSS stylesheet as well as the returned HTML string.
     *   Defaults to false.
     *
     * @return string
     *   Outputs the parsed and optionally minified HTML input.
     */
    public function parse($html, $minify = false)
    {
        $this->minify($minify);

        foreach ($this->MaterialDesignBlockElements as $search => $replace) {
            $html = str_replace($search, $replace, $html);
        }
        unset($search, $replace);

        // Enable components, but ignore previously enabled components.
        foreach ($this->MaterialDesignComponents as $component => $enabled) {
            if ($enabled === false) {
                if (strpos($html, $component) !== false) {
                    $this->enable($component);
                }
            }
        }

        if ($this->Minify !== false) {
            foreach ($this->MaterialDesignReplacements as $search => $replace) {
                $html = str_replace($search, $replace, $html);
            }
        }

        return $html;
    }

    /**
     * Set the font family.
     *
     * @param string $font_family_name
     *
     * @return bool
     *   Returns true if the font family is supported with a font stack and
     *   false if it is not.
     */
    public function setFontFamily($font_family_name)
    {
        $font_family_name = trim($font_family_name);
        $font_family_name = ucwords($font_family_name);
        $this->FontFamily = $font_family_name;
        return array_key_exists($font_family_name, $this->FontStacks);
    }

    /**
     * Set a theme as a JSON encoded array.
     *
     * @param string $json
     * @return bool
     */
    public function setTheme($json)
    {
        if (!is_string($json)) {
            return false;
        }

        $theme = json_decode($json, true);
        if (!is_array($theme) || empty($theme)) {
            return false;
        }

        if (array_key_exists('fontFamily', $theme)) {
            $this->setFontFamily($theme['fontFamily']);
            unset($theme['fontFamily']);
        }

        if (array_key_exists('css', $theme)) {
            $this->override($theme['css'], true);
            unset($theme['css']);
        }

        foreach ($theme as $property => $value) {
            if (substr($property, -5) == 'Color') {
                $property = ucfirst($property);
                $value = trim($value);
                if (isset($this->$property) && !empty($value)) {
                    if (substr($value, 0, 1) === '#') {
                        $value = strtoupper($value);
                    } else {
                        $value = strtolower($value);
                    }
                    $this->$property = $value;
                }
            }
        }

        return true;
    }
}
