# Acme Widget Basket

Proof of concept basket implementation for Acme Widget Co sales system.

The basket calculates the total price of products including delivery rules and special offers.

## Products

| Code | Product | Price |
|-----|------|------|
| R01 | Red Widget | $32.95 |
| G01 | Green Widget | $24.95 |
| B01 | Blue Widget | $7.95 |

## Delivery rules

Delivery cost depends on the order subtotal:

| Subtotal | Delivery |
|---|---|
| < $50 | $4.95 |
| < $90 | $2.95 |
| ≥ $90 | Free |

## Offers

Current promotion:

Buy one red widget (R01), get the second half price.

The offer is applied automatically when calculating the basket total.

## Installation

Clone the repository and install dependencies:
`composer install`

## Running tests

Tests are written with PHPUnit.
`vendor/bin/phpunit`

## Architecture

The project separates responsibilities into small classes:

- Product → represents a product entity
- Basket → holds products and calculates the final total
- DeliveryCalculator → calculates delivery cost based on subtotal
- OfferCalculator → applies promotional discounts

This keeps the basket logic simple and allows delivery and offer rules to evolve independently.

- Assumptions
- The current offer only applies to product R01.
- Offers are calculated before delivery charges.
- Prices are represented as floats for simplicity in this proof of concept.