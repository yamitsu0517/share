package com.example.shosekikun.dto

import java.time.LocalDateTime

data class CategoryDto(
    val id: Int? = null,
    val name: String? = "",
    val createdAt: LocalDateTime,
    val modifiedAt: LocalDateTime,
)
