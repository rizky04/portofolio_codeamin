---
name: Vivid Spectrum
colors:
  surface: '#f8f9ff'
  surface-dim: '#cbdbf5'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff4ff'
  surface-container: '#e5eeff'
  surface-container-high: '#dce9ff'
  surface-container-highest: '#d3e4fe'
  on-surface: '#0b1c30'
  on-surface-variant: '#464554'
  inverse-surface: '#213145'
  inverse-on-surface: '#eaf1ff'
  outline: '#767586'
  outline-variant: '#c7c4d7'
  surface-tint: '#494bd6'
  primary: '#4648d4'
  on-primary: '#ffffff'
  primary-container: '#6063ee'
  on-primary-container: '#fffbff'
  inverse-primary: '#c0c1ff'
  secondary: '#b4136d'
  on-secondary: '#ffffff'
  secondary-container: '#fd56a7'
  on-secondary-container: '#600037'
  tertiary: '#00685d'
  on-tertiary: '#ffffff'
  tertiary-container: '#008376'
  on-tertiary-container: '#f4fffb'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#e1e0ff'
  primary-fixed-dim: '#c0c1ff'
  on-primary-fixed: '#07006c'
  on-primary-fixed-variant: '#2f2ebe'
  secondary-fixed: '#ffd9e4'
  secondary-fixed-dim: '#ffb0cd'
  on-secondary-fixed: '#3e0022'
  on-secondary-fixed-variant: '#8c0053'
  tertiary-fixed: '#71f8e4'
  tertiary-fixed-dim: '#4fdbc8'
  on-tertiary-fixed: '#00201c'
  on-tertiary-fixed-variant: '#005048'
  background: '#f8f9ff'
  on-background: '#0b1c30'
  surface-variant: '#d3e4fe'
typography:
  display-lg:
    fontFamily: Geist
    fontSize: 48px
    fontWeight: '800'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Geist
    fontSize: 32px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Geist
    fontSize: 28px
    fontWeight: '700'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Geist
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.3'
  body-lg:
    fontFamily: Geist
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Geist
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.5'
  label-md:
    fontFamily: JetBrains Mono
    fontSize: 14px
    fontWeight: '500'
    lineHeight: '1.4'
    letterSpacing: 0.02em
  label-sm:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '500'
    lineHeight: '1.4'
    letterSpacing: 0.04em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  base: 4px
  xs: 0.5rem
  sm: 1rem
  md: 1.5rem
  lg: 2.5rem
  xl: 4rem
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 64px
---

## Brand & Style

The design system is a high-energy, professional evolution of a technical portfolio. It targets a sophisticated audience that values both technical precision and creative vibrancy. The aesthetic is a fusion of **Modern Corporate** clarity and **Vibrant Glassmorphism**, resulting in a UI that feels alive and premium.

By utilizing a clean white foundation punctuated by saturated accents, the design system evokes an emotional response of optimism, innovation, and technical mastery. It moves away from the "dark mode" developer trope toward an open, accessible, and high-contrast "Daylight" experience.

## Colors

The palette is built on a "Vivid Light" philosophy. The primary **Electric Indigo** provides a professional technical anchor, while the supporting **Hot Pink**, **Teal**, and **Amber** are used for categorical distinction and call-to-action highlights.

- **Primary (#6366F1):** Used for main actions, active states, and brand-heavy components.
- **Accents:** Pink is used for creative projects, Teal for technical specs, and Amber for warnings or highlights.
- **Surfaces:** Pure White (#FFFFFF) is the primary canvas, with Slate-50 (#F8FAFC) used to define section containment and subtle depth shifts.
- **Contrast:** Text maintains a high contrast ratio against the light background, utilizing deep Slates rather than pure blacks to maintain a premium feel.

## Typography

This design system leverages **Geist** for its systematic, Swiss-inspired precision. To ensure readability on light backgrounds, weights are slightly heavier for body copy than would be used in dark mode. 

**JetBrains Mono** is introduced for labels, metadata, and code snippets to reinforce the technical portfolio nature of the product. Use "Display" sizes sparingly for hero sections to create a high-impact entrance. All headlines utilize tighter letter-spacing to maintain a "locked-in" professional appearance.

## Layout & Spacing

The layout follows a **Fixed-Fluid Hybrid** model. Content is contained within a max-width of 1280px for desktop clarity but utilizes fluid percentages for internal column structures.

- **Grid:** A 12-column grid system is used for desktop, collapsing to 4 columns on mobile.
- **Rhythm:** An 8px linear scale (represented by the 4px base unit) governs all padding and margins to ensure visual harmony.
- **Negative Space:** Generous "XL" spacing is used between major sections to emphasize the clean, airy nature of the light theme.

## Elevation & Depth

Depth is achieved through **Colorful Glassmorphism** and **Ambient Shadows** rather than structural borders. 

- **The Glass Effect:** Floating panels (cards, modals) use a semi-transparent white background (60-80% opacity) with a 20px backdrop blur. 
- **The Shadow Profile:** Surfaces use "Long-Tail" shadows—low opacity (4-8%) with a large spread, often tinted slightly with the primary Indigo to prevent the shadows from looking "dirty" on the white background.
- **Layering:** Level 0 is the Surface Alt (#F8FAFC); Level 1 is a White Card; Level 2 is a Glass Overlay.

## Shapes

The design system employs a **Rounded** aesthetic (0.5rem base) to soften the technical Geist typography. This creates an approachable, modern feel. Interactive elements like buttons and input fields follow the base roundedness, while large container cards and images scale up to `rounded-xl` (1.5rem) to emphasize the soft-ui influence.

## Components

### Buttons
Primary buttons use a solid Electric Indigo fill with white text. Secondary buttons utilize a "Glass" style: a subtle primary-tinted background with high-transparency and a crisp 1px primary border.

### Chips & Tags
Tags are the primary vehicle for color. Each technical skill or category should use a "Soft Fill" (10% opacity of the accent color) with "Hard Text" (100% opacity of the same color). This creates a vibrant, rainbow-like filtering system without overwhelming the eye.

### Input Fields
Inputs are minimal: a light gray background (#F1F5F9) that transitions to a white background with a primary indigo shadow-glow on focus.

### Cards
Cards are the hallmark of this design system. They must feature a subtle gradient border (Indigo to Pink) at very low opacity, a significant backdrop blur, and a soft ambient shadow. 

### Progress Indicators
Use the full-color palette for data visualization—Teal for "Complete," Amber for "In Progress," and Pink for "High Priority."