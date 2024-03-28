<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Card</title>
  <style>
    .product-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 16px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    
    .product-image {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 12px;
    }
    
    .product-title {
      font-size: 1.2rem;
      margin-bottom: 8px;
    }
    
    .product-description {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 12px;
    }
    
    .product-price {
      font-size: 1.2rem;
      font-weight: bold;
      color: #00aaff;
    }
  </style>
</head>
<body>
  <div class="product-card">
    <img src="product-image.jpg" alt="Product Image" class="product-image">
    <h2 class="product-title">Product Name</h2>
    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p class="product-price">$99.99</p>
    <button>Add to Cart</button>
  </div>
</body>
</html>
