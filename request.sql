SELECT  a.*
FROM    product a
        INNER JOIN
        (
            SELECT Category, MAX(Price) maxPrice
            FROM tbProduct
            GROUP BY Category
        ) b ON a.category = b.category AND
                a.price = b.maxPrice
